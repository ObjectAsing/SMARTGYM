<?php

/*
 * ***************************************************************
 * Script : Dashboard_qry.php
 * Version :
 * Date Created : Oct 3, 2017 1:28:00 PM
 * Author : Pudyasto Adi W.
 * Email : mr.pudyasto@gmail.com
 * Description :
 * ***************************************************************
 */

/**
 * Description of Dashboard_qry
 *
 * @author mrpud
 */
class Dashboard_qry extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function getEmployees() {
        $first_period = $this->input->post('first_period');
        $last_period = $this->input->post('last_period');
        $res = array(
            "emp" => $this->getAllEmp($first_period,$last_period),
            "m_emp" => $this->getMaleEmp($first_period,$last_period),
            "f_emp" => $this->getFemaleEmp($first_period,$last_period),
            "mf_emp" => $this->getMaleFemaleEmp($first_period,$last_period),
          "dept_emp" => $this->getEmpDept($first_period,$last_period),
          "gender_dept_emp" => $this->getGenderEmpDept($first_period,$last_period),
        //    "year_emp_dept" => $this->getYearEmpDept($first_period,$last_period),
        );
        return json_encode($res);

    }

    private function getAllEmp($first_period,$last_period) {
        $str = "SELECT date_format(created,'%Y') as hire_year
                        , COUNT(date_format(created,'%Y')) as total
                FROM member
                WHERE date_format(created,'%Y')
                    BETWEEN '{$first_period}' AND '{$last_period}'
                GROUP BY date_format(created,'%Y')";
        $query = $this->db->query($str);
        $res = array();
        foreach ($query->result_array() as $value) {
            $res[]=array(
                "total" => $value['total'],
                "hire_year" => $value['hire_year'],
            );
        }
        return $res;
    }

    private function getMaleEmp($first_period,$last_period) {
        $str = "SELECT gender,date_format(created,'%Y') as hire_year
                        , COUNT(date_format(created,'%Y')) as total
                FROM member
                WHERE date_format(created,'%Y')
                    BETWEEN '{$first_period}' AND '{$last_period}'
                    AND gender = 'M'
                GROUP BY date_format(created,'%Y')";
        $query = $this->db->query($str);
        $res = array();
        foreach ($query->result_array() as $value) {
            $res[]=array(
                "total" => $value['total'],
                "hire_year" => $value['hire_year'],
            );
        }
        return $res;
    }

    private function getFemaleEmp($first_period,$last_period) {
        $str = "SELECT member.gender, date_format(created,'%Y') as hire_year
                        , COUNT(date_format(created,'%Y')) as total
                FROM member
                WHERE date_format(created,'%Y')
                    BETWEEN '{$first_period}' AND '{$last_period}'
                    AND gender = 'F'
                GROUP BY date_format(created,'%Y')";
        $query = $this->db->query($str);
        $res = array();
        foreach ($query->result_array() as $value) {
            $res[]=array(
                "total" => $value['total'],
                "hire_year" => $value['hire_year'],
            );
        }
        return $res;
    }

    private function getMaleFemaleEmp($first_period,$last_period) {
        $str = "SELECT
                        member.role,
                        SUM(CASE WHEN member.gender = 'M' THEN 1 ELSE 0 END) AS male,
                    SUM(CASE WHEN member.gender = 'F' THEN 1 ELSE 0 END) AS female
                FROM member

                WHERE date_format(member.created,'%Y')
                                    BETWEEN '{$first_period}' AND '{$last_period}'
              ";
        $query = $this->db->query($str);
        $res = array();
        foreach ($query->result_array() as $value) {
            $res[]=array(
                "male" => $value['male'],
                "female" => $value['female'],
            );
        }
        return $res;
    }


    private function getEmpDept($first_period,$last_period){
        $str = "SELECT
                        plan.name as names,
                    COUNT(*) total
                FROM plan


                WHERE date_format(plan.date,'%Y')
                                    BETWEEN '{$first_period}' AND '{$last_period}'
                GROUP BY name";
        $query = $this->db->query($str);
        $res = array();
        foreach ($query->result_array() as $value) {
            $res[]=array(
                "total" => $value['total'],
                "names" => $value['names'],
            );
        }
        return $res;
    }

    private function getGenderEmpDept($first_period,$last_period){
        $str = "SELECT
                        member.role as role,
                        SUM(CASE WHEN member.gender = 'M' THEN 1 ELSE 0 END) AS male,
                    SUM(CASE WHEN member.gender = 'F' THEN 1 ELSE 0 END) AS female
                FROM member

                WHERE date_format(member.created,'%Y')
                                    BETWEEN '{$first_period}' AND '{$last_period}'
                GROUP BY member.role";
        $query = $this->db->query($str);
        $res = array();
        foreach ($query->result_array() as $value) {
            $res[]=array(
                "male" => $value['male'],
                "female" => $value['female'],
                "role" => $value['role'],
            );
        }
        return $res;
    }


/*
    private function getYearEmpDept($first_period,$last_period){
        $str = "SELECT
                    date_format(member.created,'%Y') hire_year,

                    COUNT(*) total
                FROM member

                WHERE date_format(member.created,'%Y')
                                    BETWEEN '{$first_period}' AND '{$last_period}'
                ";
        $query = $this->db->query($str);
        $year = array();
        foreach ($query->result_array() as $value) {
            $year[$value['hire_year']] = $value['hire_year'];
        }
        $res = array();
        foreach ($year as $yrs) {
            foreach ($query->result_array() as $value) {
                if($yrs===$value['hire_year']){
                    $res[$value['hire_year']][]=array(
                        "total" => $value['total'],
                        "dept_name" => $value['dept_name'],
                    );
                }
            }
        }
        return $res;
    } */
}
