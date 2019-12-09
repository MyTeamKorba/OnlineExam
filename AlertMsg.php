<?php


class AlertMsg
{
    public $Msg =[];


    /**
     * @return array
     */
    public function getMsg()
    {
        return $this->Msg;
    }

    /**
     * @param array $Msg
     */
    public function setMsg($Msg)
    {
        $this->Msg = $Msg;
    }

    /**
     * @return null
     */
    public function getInsertMsg()
    {
        return $this->InsertMsg;
    }

    /**
     * @param null $InsertMsg
     */
    public function setInsertMsg($InsertMsg)
    {
        $this->InsertMsg = $InsertMsg;
    }

    /**
     * @return null
     */
    public function getSearchMsg()
    {
        return $this->SearchMsg;
    }

    /**
     * @param null $SearchMsg
     */
    public function setSearchMsg($SearchMsg)
    {
        $this->SearchMsg = $SearchMsg;
    }

    /**
     * @return null
     */
    public function getUpdateMsg()
    {
        return $this->UpdateMsg;
    }

    /**
     * @param null $UpdateMsg
     */
    public function setUpdateMsg($UpdateMsg)
    {
        $this->UpdateMsg = $UpdateMsg;
    }

    /**
     * @return null
     */
    public function getDeleteMsg()
    {
        return $this->DeleteMsg;
    }

    /**
     * @param null $DeleteMsg
     */
    public function setDeleteMsg($DeleteMsg)
    {
        $this->DeleteMsg = $DeleteMsg;
    }

    /**
     * @return null
     */
    public function getErrorMsg()
    {
        return $this->ErrorMsg;
    }

    /**
     * @param null $ErrorMsg
     */
    public function setErrorMsg($ErrorMsg)
    {
        $this->ErrorMsg = $ErrorMsg;
    }


}