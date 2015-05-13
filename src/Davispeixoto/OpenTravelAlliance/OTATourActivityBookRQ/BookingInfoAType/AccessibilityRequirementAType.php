<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType;

use Davispeixoto\OpenTravelAlliance\TourActivityAccessibilityReqType;

/**
 * Class representing AccessibilityRequirementAType
 */
class AccessibilityRequirementAType extends TourActivityAccessibilityReqType
{

    /**
     * A code known between trading partners for a special needs item.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
     *
     * @property string $participantID
     */
    private $participantID = null;

    /**
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant category with other information.
     *
     * @property string $participantCategoryID
     */
    private $participantCategoryID = null;

    /**
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
     *
     * @property string $groupID
     */
    private $groupID = null;

    /**
     * Gets as code
     *
     * A code known between trading partners for a special needs item.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code known between trading partners for a special needs item.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as participantID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
     *
     * @return string
     */
    public function getParticipantID()
    {
        return $this->participantID;
    }

    /**
     * Sets a new participantID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
     *
     * @param string $participantID
     * @return self
     */
    public function setParticipantID($participantID)
    {
        $this->participantID = $participantID;

        return $this;
    }

    /**
     * Gets as participantCategoryID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant category with other information.
     *
     * @return string
     */
    public function getParticipantCategoryID()
    {
        return $this->participantCategoryID;
    }

    /**
     * Sets a new participantCategoryID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant category with other information.
     *
     * @param string $participantCategoryID
     * @return self
     */
    public function setParticipantCategoryID($participantCategoryID)
    {
        $this->participantCategoryID = $participantCategoryID;

        return $this;
    }

    /**
     * Gets as groupID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
     *
     * @return string
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     * Sets a new groupID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
     *
     * @param string $groupID
     * @return self
     */
    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;

        return $this;
    }


}
