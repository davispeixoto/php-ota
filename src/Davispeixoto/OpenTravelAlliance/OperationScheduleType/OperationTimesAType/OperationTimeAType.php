<?php

namespace Davispeixoto\OpenTravelAlliance\OperationScheduleType\OperationTimesAType;

/**
 * Class representing OperationTimeAType
 */
class OperationTimeAType
{

    /**
     * When true, apply to Monday.
     *
     * @property boolean $mon
     */
    private $mon = null;

    /**
     * When true, apply to Tuesday.
     *
     * @property boolean $tue
     */
    private $tue = null;

    /**
     * When true, apply to Wednesday.
     *
     * @property boolean $weds
     */
    private $weds = null;

    /**
     * When true, apply to Thursday.
     *
     * @property boolean $thur
     */
    private $thur = null;

    /**
     * When true, apply to Friday.
     *
     * @property boolean $fri
     */
    private $fri = null;

    /**
     * When true, apply to Saturday.
     *
     * @property boolean $sat
     */
    private $sat = null;

    /**
     * When true, apply to Sunday.
     *
     * @property boolean $sun
     */
    private $sun = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * Used to provide additional information regarding operation times (e.g., after
     * hours operations, restricted times). Refer to OpenTravel Code List Additional
     * Operation Info (OPR).
     *
     * @property string $additionalOperationInfoCode
     */
    private $additionalOperationInfoCode = null;

    /**
     * The frequency with which this operation occurs (e.g., 'on the hour', 'on the
     * half hour').
     *
     * @property string $frequency
     */
    private $frequency = null;

    /**
     * Textual information for this period of operation.
     *
     * @property string $text
     */
    private $text = null;

    /**
     * Gets as mon
     *
     * When true, apply to Monday.
     *
     * @return boolean
     */
    public function getMon()
    {
        return $this->mon;
    }

    /**
     * Sets a new mon
     *
     * When true, apply to Monday.
     *
     * @param boolean $mon
     * @return self
     */
    public function setMon($mon)
    {
        $this->mon = $mon;

        return $this;
    }

    /**
     * Gets as tue
     *
     * When true, apply to Tuesday.
     *
     * @return boolean
     */
    public function getTue()
    {
        return $this->tue;
    }

    /**
     * Sets a new tue
     *
     * When true, apply to Tuesday.
     *
     * @param boolean $tue
     * @return self
     */
    public function setTue($tue)
    {
        $this->tue = $tue;

        return $this;
    }

    /**
     * Gets as weds
     *
     * When true, apply to Wednesday.
     *
     * @return boolean
     */
    public function getWeds()
    {
        return $this->weds;
    }

    /**
     * Sets a new weds
     *
     * When true, apply to Wednesday.
     *
     * @param boolean $weds
     * @return self
     */
    public function setWeds($weds)
    {
        $this->weds = $weds;

        return $this;
    }

    /**
     * Gets as thur
     *
     * When true, apply to Thursday.
     *
     * @return boolean
     */
    public function getThur()
    {
        return $this->thur;
    }

    /**
     * Sets a new thur
     *
     * When true, apply to Thursday.
     *
     * @param boolean $thur
     * @return self
     */
    public function setThur($thur)
    {
        $this->thur = $thur;

        return $this;
    }

    /**
     * Gets as fri
     *
     * When true, apply to Friday.
     *
     * @return boolean
     */
    public function getFri()
    {
        return $this->fri;
    }

    /**
     * Sets a new fri
     *
     * When true, apply to Friday.
     *
     * @param boolean $fri
     * @return self
     */
    public function setFri($fri)
    {
        $this->fri = $fri;

        return $this;
    }

    /**
     * Gets as sat
     *
     * When true, apply to Saturday.
     *
     * @return boolean
     */
    public function getSat()
    {
        return $this->sat;
    }

    /**
     * Sets a new sat
     *
     * When true, apply to Saturday.
     *
     * @param boolean $sat
     * @return self
     */
    public function setSat($sat)
    {
        $this->sat = $sat;

        return $this;
    }

    /**
     * Gets as sun
     *
     * When true, apply to Sunday.
     *
     * @return boolean
     */
    public function getSun()
    {
        return $this->sun;
    }

    /**
     * Sets a new sun
     *
     * When true, apply to Sunday.
     *
     * @param boolean $sun
     * @return self
     */
    public function setSun($sun)
    {
        $this->sun = $sun;

        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as additionalOperationInfoCode
     *
     * Used to provide additional information regarding operation times (e.g., after
     * hours operations, restricted times). Refer to OpenTravel Code List Additional
     * Operation Info (OPR).
     *
     * @return string
     */
    public function getAdditionalOperationInfoCode()
    {
        return $this->additionalOperationInfoCode;
    }

    /**
     * Sets a new additionalOperationInfoCode
     *
     * Used to provide additional information regarding operation times (e.g., after
     * hours operations, restricted times). Refer to OpenTravel Code List Additional
     * Operation Info (OPR).
     *
     * @param string $additionalOperationInfoCode
     * @return self
     */
    public function setAdditionalOperationInfoCode($additionalOperationInfoCode)
    {
        $this->additionalOperationInfoCode = $additionalOperationInfoCode;

        return $this;
    }

    /**
     * Gets as frequency
     *
     * The frequency with which this operation occurs (e.g., 'on the hour', 'on the
     * half hour').
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * The frequency with which this operation occurs (e.g., 'on the hour', 'on the
     * half hour').
     *
     * @param string $frequency
     * @return self
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Gets as text
     *
     * Textual information for this period of operation.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Textual information for this period of operation.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }


}
