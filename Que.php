<?php


class Que
{
    public $QueSet = [];

    /**
     * @return array
     */
    public function getQueSet()
    {
        return $this->QueSet;
    }

    /**
     * @param array $QueSet
     */
    public function setQueSet($QueSet)
    {
        $this->QueSet = $QueSet;
    }

    /**
     * @return null
     */
    public function getId()
    {
        if ($this->QueSet != null) {
            $id = $this->QueSet['id'];
        } else {
            $id = '';
        }
        return $id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->QueSet['id'] = $id;
    }

    /**
     * @return null
     */
    public function getQue()
    {
        if ($this->QueSet != null) {
            $Que = $this->QueSet['Que'];
        } else {
            $Que = '';
        }
        return $Que;
    }

    /**
     * @param null $Que
     */
    public function setQue($Que)
    {
        $this->QueSet['Que'] = $Que;
    }

    /**
     * @return null
     */
    public function getOp1()
    {
        if ($this->QueSet != null) {
            $Op1 = $this->QueSet['Op1'];
        } else {
            $Op1 = '';
        }
        return $Op1;
    }

    /**
     * @param null $Op1
     */
    public function setOp1($Op1)
    {
        $this->QueSet['Op1'] = $Op1;
    }

    /**
     * @return null
     */
    public function getOp2()
    {
        if ($this->QueSet != null) {
            $Op2 = $this->QueSet['Op2'];
        } else {
            $Op2 = '';
        }
        return $Op2;
    }

    /**
     * @param null $Op2
     */
    public function setOp2($Op2)
    {
        $this->QueSet['Op2'] = $Op2;
    }

    /**
     * @return null
     */
    public function getOp3()
    {
        if ($this->QueSet != null) {
            $Op3 = $this->QueSet['Op3'];
        } else {
            $Op3 = '';
        }
        return $Op3;
    }

    /**
     * @param null $Op3
     */
    public function setOp3($Op3)
    {
        $this->QueSet['Op3'] = $Op3;
    }

    /**
     * @return null
     */
    public function getOp4()
    {
        if ($this->QueSet != null) {
            $Op4 = $this->QueSet['Op4'];
        } else {
            $Op4 = '';
        }
        return $Op4;
    }

    /**
     * @param null $Op4
     */
    public function setOp4($Op4)
    {
        $this->QueSet['Op4'] = $Op4;
    }

    /**
     * @return null
     */
    public function getAns()
    {
        if ($this->QueSet != null) {
            $Ans = $this->QueSet['Ans'];
        } else {
            $Ans = '';
        }
        return $Ans;
    }

    /**
     * @param null $Ans
     */
    public function setAns($Ans)
    {
        $this->QueSet['Ans'] = $Ans;
    }

    /**
     * @return null
     */
    public function getStudAns()
    {
        if ($this->QueSet != null) {
            $StudAns = $this->QueSet['StudAns'];
        } else {
            $StudAns = '';
        }
        return StudAns;
    }

    /**
     * @param null $StudAns
     */
    public function setStudAns($StudAns)
    {
        $this->QueSet['StudAns'] = $StudAns;
    }

}