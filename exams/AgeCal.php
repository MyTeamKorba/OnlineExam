<?php


class AgeCal

{
    public $DOB = array();

    function DOB()
    {
        $day = $this->getDate();
        $month = $this->getMonth();
        $year = $this->getYear();

        $bday = new DateTime("$day-$month-$year");
        $today = new DateTime('today');
        //echo '<br>Other : ' . date_diff(date_create('1988-12-21'), date_create('today'))->y;
        $this->DOB['Days'] = $today->diff($bday)->d;
        $this->DOB['Months'] = $today->diff($bday)->m;
        $this->DOB['Years'] = $today->diff($bday)->y;
        return $this->DOB;
    }

    /**
     * @return null
     */
    public function getDate()
    {
        return $this->DOB['Days'];
    }

    /**
     * @param null $Date
     */
    public function setDate($Date)
    {
        $this->DOB['Days'] = $Date;
    }

    /**
     * @return null
     */
    public function getMonth()
    {
        return $this->DOB['Months'];
    }

    /**
     * @param null $Month
     */
    public function setMonth($Month)
    {
        $this->DOB['Months'] = $Month;
    }

    /**
     * @return null
     */
    public function getYear()
    {
        return $this->DOB['Years'];
    }

    /**
     * @param null $Year
     */
    public function setYear($Year)
    {
        $this->DOB['Years'] = $Year;
    }

}