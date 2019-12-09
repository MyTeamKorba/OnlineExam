<?php


class QueryClass
{
    public $LData=array();


    /**
     * @return null
     */
    public function getTable()
    {
        return $this->LData['Table'];
    }

    /**
     * @param null $Table
     */
    public function setTable($Table)
    {
        $this->LData['Table'] = $Table;
    }

    /**
     * @return null
     */
    public function getUid()
    {
        return $this->LData['uid'];
    }

    /**
     * @param null $Uid
     */
    public function setUid($Uid)
    {
        $this->LData['uid'] = $Uid;
    }

    /**
     * @return null
     */
    public function getJDate()
    {
        return $this->LData['JDate'];
    }

    /**
     * @param null $JDate
     */
    public function setJDate($JDate)
    {
        $this->LData['JDate'] = $JDate;
    }

    /**
     * @return null
     */
    public function getUType()
    {
        return $this->LData['UType'];
    }

    /**
     * @param null $UType
     */
    public function setUType($UType)
    {
        $this->LData['UType'] = $UType;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->LData['Email'];
    }

    /**
     * @param null $Email
     */
    public function setEmail($Email)
    {
        $this->LData['Email'] = $Email;
    }

    /**
     * @return null
     */
    public function getMNo()
    {
        return $this->LData['MNo'];
    }

    /**
     * @param null $MNo
     */
    public function setMNo($MNo)
    {
        $this->LData['MNo'] = $MNo;
    }

    /**
     * @return null
     */
    public function getPass()
    {
        return $this->LData['Pass'];
    }

    /**
     * @param null $Pass
     */
    public function setPass($Pass)
    {
        $this->LData['Pass'] = $Pass;
    }

    /**
     * @return null
     */
    public function getOTP()
    {
        return $this->LData['OTP'];
    }

    /**
     * @param null $OTP
     */
    public function setOTP($OTP)
    {
        $this->LData['OTP'] = $OTP;
    }

    /**
     * @return null
     */
    public function getStatus()
    {
        return $this->LData['Status'];
    }

    /**
     * @param null $Status
     */
    public function setStatus($Status)
    {
        $this->LData['Status'] = $Status;
    }





}