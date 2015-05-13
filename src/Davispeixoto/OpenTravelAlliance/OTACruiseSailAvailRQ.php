<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTACruiseSailAvailRQ
 */
class OTACruiseSailAvailRQ
{

    /**
     * A reference for additional message identification, assigned by the requesting
     * host system.Implementer: A reference for additional message identification,
     * assigned by the requesting host system. When a request message includes an echo
     * token the corresponding response message MUST include an echo token with an
     * identical value.
     *
     * @property string $echoToken
     */
    private $echoToken = null;

    /**
     * ISO 8601 encoded timestamp indicating the creation date and time of the
     * message.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/date_and_time_format.htmYYYY-MM-DDThh:mm:ssZ
     * with time values using the 24 hour clock:
     * 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z
     *
     * @property \DateTime $timeStamp
     */
    private $timeStamp = null;

    /**
     * Test or Production target system indicator.
     *
     * @property string $target
     */
    private $target = null;

    /**
     * The name of the Test or Production system.
     *
     * @property string $targetName
     */
    private $targetName = null;

    /**
     * The OpenTravel message version indicated by a decimal value.
     *
     * @property float $version
     */
    private $version = null;

    /**
     * Unique identifier to relate all messages within a transaction (e.g. this would
     * be sent in all request and response messages that are part of an on-going
     * transaction).
     *
     * @property string $transactionIdentifier
     */
    private $transactionIdentifier = null;

    /**
     * The sequence number of the transaction assigned by the sending system for
     * ordered message processing or message resynchronization.Implementer: Message
     * resynchronization typically is required if a system has been off-line and needs
     * to retrieve messages that were missed.
     *
     * @property integer $sequenceNmbr
     */
    private $sequenceNmbr = null;

    /**
     * This indicates where this message falls within a sequence of messages.
     *
     * @property string $transactionStatusCode
     */
    private $transactionStatusCode = null;

    /**
     * When true, indicates the message is being re-sent after a failure.Implementer:
     * It is recommended that this attribute is used (i.e., set to TRUE) only when a
     * message is retransmitted.
     *
     * @property boolean $retransmissionIndicator
     */
    private $retransmissionIndicator = null;

    /**
     * Allows end-to-end correlation of log messages with the corresponding Web service
     * message throughout the processing of the Web service message.
     *
     * @property string $correlationID
     */
    private $correlationID = null;

    /**
     * The primary language preference for the message encoded as ISO 639-3.ISO 639 (3)
     * character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @property string $primaryLangID
     */
    private $primaryLangID = null;

    /**
     * The alternate language for a customer or message encoded as ISO 639-3.ISO 639
     * (3) character language codes:
     * http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @property string $altLangID
     */
    private $altLangID = null;

    /**
     * If true, this indicates more items are available. If false, no more items are
     * available.
     *
     * @property boolean $moreIndicator
     */
    private $moreIndicator = null;

    /**
     * A reference to the last response returned. Originally set in the response
     * message and will be used in the next query for more details.
     *
     * @property string $moreDataEchoToken
     */
    private $moreDataEchoToken = null;

    /**
     * A positive integer value that indicates the maximum number of responses desired
     * in the return.
     *
     * @property integer $maxResponses
     */
    private $maxResponses = null;

    /**
     * Point of sale object.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * Specifies guest names and/or their transportation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuestType[] $guest
     */
    private $guest = null;

    /**
     * Specifies guest quantity and guest types.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\GuestCountsAType
     * $guestCounts
     */
    private $guestCounts = null;

    /**
     * Specifies sailing availability start and end dates as well as cruise duration.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\SailingDateRangeAType
     * $sailingDateRange
     */
    private $sailingDateRange = null;

    /**
     * Collection of cruise line preferences.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\CruiseLinePrefsAType\CruiseLinePrefAType[]
     * $cruiseLinePrefs
     */
    private $cruiseLinePrefs = null;

    /**
     * Specifies geographical region to include in the response.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\RegionPrefAType[]
     * $regionPref
     */
    private $regionPref = null;

    /**
     * Multimodal offer influencers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer
     */
    private $multimodalOffer = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as echoToken
     *
     * A reference for additional message identification, assigned by the requesting
     * host system.Implementer: A reference for additional message identification,
     * assigned by the requesting host system. When a request message includes an echo
     * token the corresponding response message MUST include an echo token with an
     * identical value.
     *
     * @return string
     */
    public function getEchoToken()
    {
        return $this->echoToken;
    }

    /**
     * Sets a new echoToken
     *
     * A reference for additional message identification, assigned by the requesting
     * host system.Implementer: A reference for additional message identification,
     * assigned by the requesting host system. When a request message includes an echo
     * token the corresponding response message MUST include an echo token with an
     * identical value.
     *
     * @param string $echoToken
     * @return self
     */
    public function setEchoToken($echoToken)
    {
        $this->echoToken = $echoToken;

        return $this;
    }

    /**
     * Gets as timeStamp
     *
     * ISO 8601 encoded timestamp indicating the creation date and time of the
     * message.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/date_and_time_format.htmYYYY-MM-DDThh:mm:ssZ
     * with time values using the 24 hour clock:
     * 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z
     *
     * @return \DateTime
     */
    public function getTimeStamp()
    {
        return $this->timeStamp;
    }

    /**
     * Sets a new timeStamp
     *
     * ISO 8601 encoded timestamp indicating the creation date and time of the
     * message.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/date_and_time_format.htmYYYY-MM-DDThh:mm:ssZ
     * with time values using the 24 hour clock:
     * 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z
     *
     * @param \DateTime $timeStamp
     * @return self
     */
    public function setTimeStamp(\DateTime $timeStamp)
    {
        $this->timeStamp = $timeStamp;

        return $this;
    }

    /**
     * Gets as target
     *
     * Test or Production target system indicator.
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * Test or Production target system indicator.
     *
     * @param string $target
     * @return self
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Gets as targetName
     *
     * The name of the Test or Production system.
     *
     * @return string
     */
    public function getTargetName()
    {
        return $this->targetName;
    }

    /**
     * Sets a new targetName
     *
     * The name of the Test or Production system.
     *
     * @param string $targetName
     * @return self
     */
    public function setTargetName($targetName)
    {
        $this->targetName = $targetName;

        return $this;
    }

    /**
     * Gets as version
     *
     * The OpenTravel message version indicated by a decimal value.
     *
     * @return float
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The OpenTravel message version indicated by a decimal value.
     *
     * @param float $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as transactionIdentifier
     *
     * Unique identifier to relate all messages within a transaction (e.g. this would
     * be sent in all request and response messages that are part of an on-going
     * transaction).
     *
     * @return string
     */
    public function getTransactionIdentifier()
    {
        return $this->transactionIdentifier;
    }

    /**
     * Sets a new transactionIdentifier
     *
     * Unique identifier to relate all messages within a transaction (e.g. this would
     * be sent in all request and response messages that are part of an on-going
     * transaction).
     *
     * @param string $transactionIdentifier
     * @return self
     */
    public function setTransactionIdentifier($transactionIdentifier)
    {
        $this->transactionIdentifier = $transactionIdentifier;

        return $this;
    }

    /**
     * Gets as sequenceNmbr
     *
     * The sequence number of the transaction assigned by the sending system for
     * ordered message processing or message resynchronization.Implementer: Message
     * resynchronization typically is required if a system has been off-line and needs
     * to retrieve messages that were missed.
     *
     * @return integer
     */
    public function getSequenceNmbr()
    {
        return $this->sequenceNmbr;
    }

    /**
     * Sets a new sequenceNmbr
     *
     * The sequence number of the transaction assigned by the sending system for
     * ordered message processing or message resynchronization.Implementer: Message
     * resynchronization typically is required if a system has been off-line and needs
     * to retrieve messages that were missed.
     *
     * @param integer $sequenceNmbr
     * @return self
     */
    public function setSequenceNmbr($sequenceNmbr)
    {
        $this->sequenceNmbr = $sequenceNmbr;

        return $this;
    }

    /**
     * Gets as transactionStatusCode
     *
     * This indicates where this message falls within a sequence of messages.
     *
     * @return string
     */
    public function getTransactionStatusCode()
    {
        return $this->transactionStatusCode;
    }

    /**
     * Sets a new transactionStatusCode
     *
     * This indicates where this message falls within a sequence of messages.
     *
     * @param string $transactionStatusCode
     * @return self
     */
    public function setTransactionStatusCode($transactionStatusCode)
    {
        $this->transactionStatusCode = $transactionStatusCode;

        return $this;
    }

    /**
     * Gets as retransmissionIndicator
     *
     * When true, indicates the message is being re-sent after a failure.Implementer:
     * It is recommended that this attribute is used (i.e., set to TRUE) only when a
     * message is retransmitted.
     *
     * @return boolean
     */
    public function getRetransmissionIndicator()
    {
        return $this->retransmissionIndicator;
    }

    /**
     * Sets a new retransmissionIndicator
     *
     * When true, indicates the message is being re-sent after a failure.Implementer:
     * It is recommended that this attribute is used (i.e., set to TRUE) only when a
     * message is retransmitted.
     *
     * @param boolean $retransmissionIndicator
     * @return self
     */
    public function setRetransmissionIndicator($retransmissionIndicator)
    {
        $this->retransmissionIndicator = $retransmissionIndicator;

        return $this;
    }

    /**
     * Gets as correlationID
     *
     * Allows end-to-end correlation of log messages with the corresponding Web service
     * message throughout the processing of the Web service message.
     *
     * @return string
     */
    public function getCorrelationID()
    {
        return $this->correlationID;
    }

    /**
     * Sets a new correlationID
     *
     * Allows end-to-end correlation of log messages with the corresponding Web service
     * message throughout the processing of the Web service message.
     *
     * @param string $correlationID
     * @return self
     */
    public function setCorrelationID($correlationID)
    {
        $this->correlationID = $correlationID;

        return $this;
    }

    /**
     * Gets as primaryLangID
     *
     * The primary language preference for the message encoded as ISO 639-3.ISO 639 (3)
     * character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @return string
     */
    public function getPrimaryLangID()
    {
        return $this->primaryLangID;
    }

    /**
     * Sets a new primaryLangID
     *
     * The primary language preference for the message encoded as ISO 639-3.ISO 639 (3)
     * character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @param string $primaryLangID
     * @return self
     */
    public function setPrimaryLangID($primaryLangID)
    {
        $this->primaryLangID = $primaryLangID;

        return $this;
    }

    /**
     * Gets as altLangID
     *
     * The alternate language for a customer or message encoded as ISO 639-3.ISO 639
     * (3) character language codes:
     * http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @return string
     */
    public function getAltLangID()
    {
        return $this->altLangID;
    }

    /**
     * Sets a new altLangID
     *
     * The alternate language for a customer or message encoded as ISO 639-3.ISO 639
     * (3) character language codes:
     * http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @param string $altLangID
     * @return self
     */
    public function setAltLangID($altLangID)
    {
        $this->altLangID = $altLangID;

        return $this;
    }

    /**
     * Gets as moreIndicator
     *
     * If true, this indicates more items are available. If false, no more items are
     * available.
     *
     * @return boolean
     */
    public function getMoreIndicator()
    {
        return $this->moreIndicator;
    }

    /**
     * Sets a new moreIndicator
     *
     * If true, this indicates more items are available. If false, no more items are
     * available.
     *
     * @param boolean $moreIndicator
     * @return self
     */
    public function setMoreIndicator($moreIndicator)
    {
        $this->moreIndicator = $moreIndicator;

        return $this;
    }

    /**
     * Gets as moreDataEchoToken
     *
     * A reference to the last response returned. Originally set in the response
     * message and will be used in the next query for more details.
     *
     * @return string
     */
    public function getMoreDataEchoToken()
    {
        return $this->moreDataEchoToken;
    }

    /**
     * Sets a new moreDataEchoToken
     *
     * A reference to the last response returned. Originally set in the response
     * message and will be used in the next query for more details.
     *
     * @param string $moreDataEchoToken
     * @return self
     */
    public function setMoreDataEchoToken($moreDataEchoToken)
    {
        $this->moreDataEchoToken = $moreDataEchoToken;

        return $this;
    }

    /**
     * Gets as maxResponses
     *
     * A positive integer value that indicates the maximum number of responses desired
     * in the return.
     *
     * @return integer
     */
    public function getMaxResponses()
    {
        return $this->maxResponses;
    }

    /**
     * Sets a new maxResponses
     *
     * A positive integer value that indicates the maximum number of responses desired
     * in the return.
     *
     * @param integer $maxResponses
     * @return self
     */
    public function setMaxResponses($maxResponses)
    {
        $this->maxResponses = $maxResponses;

        return $this;
    }

    /**
     * Adds as source
     *
     * Point of sale object.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SourceType $source
     */
    public function addToPOS(\Davispeixoto\OpenTravelAlliance\SourceType $source)
    {
        $this->pOS[] = $source;

        return $this;
    }

    /**
     * isset pOS
     *
     * Point of sale object.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPOS($index)
    {
        return isset($this->pOS[$index]);
    }

    /**
     * unset pOS
     *
     * Point of sale object.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPOS($index)
    {
        unset($this->pOS[$index]);
    }

    /**
     * Gets as pOS
     *
     * Point of sale object.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SourceType[]
     */
    public function getPOS()
    {
        return $this->pOS;
    }

    /**
     * Sets a new pOS
     *
     * Point of sale object.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     * @return self
     */
    public function setPOS(array $pOS)
    {
        $this->pOS = $pOS;

        return $this;
    }

    /**
     * Adds as guest
     *
     * Specifies guest names and/or their transportation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GuestType $guest
     */
    public function addToGuest(\Davispeixoto\OpenTravelAlliance\GuestType $guest)
    {
        $this->guest[] = $guest;

        return $this;
    }

    /**
     * isset guest
     *
     * Specifies guest names and/or their transportation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuest($index)
    {
        return isset($this->guest[$index]);
    }

    /**
     * unset guest
     *
     * Specifies guest names and/or their transportation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuest($index)
    {
        unset($this->guest[$index]);
    }

    /**
     * Gets as guest
     *
     * Specifies guest names and/or their transportation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuestType[]
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * Sets a new guest
     *
     * Specifies guest names and/or their transportation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuestType[] $guest
     * @return self
     */
    public function setGuest(array $guest)
    {
        $this->guest = $guest;

        return $this;
    }

    /**
     * Gets as guestCounts
     *
     * Specifies guest quantity and guest types.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\GuestCountsAType
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * Specifies guest quantity and guest types.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\GuestCountsAType
     * $guestCounts
     * @return self
     */
    public function setGuestCounts(\Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\GuestCountsAType $guestCounts)
    {
        $this->guestCounts = $guestCounts;

        return $this;
    }

    /**
     * Gets as sailingDateRange
     *
     * Specifies sailing availability start and end dates as well as cruise duration.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\SailingDateRangeAType
     */
    public function getSailingDateRange()
    {
        return $this->sailingDateRange;
    }

    /**
     * Sets a new sailingDateRange
     *
     * Specifies sailing availability start and end dates as well as cruise duration.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\SailingDateRangeAType
     * $sailingDateRange
     * @return self
     */
    public function setSailingDateRange(
        \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\SailingDateRangeAType $sailingDateRange
    ) {
        $this->sailingDateRange = $sailingDateRange;

        return $this;
    }

    /**
     * Adds as cruiseLinePref
     *
     * Collection of cruise line preferences.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\CruiseLinePrefsAType\CruiseLinePrefAType
     * $cruiseLinePref
     */
    public function addToCruiseLinePrefs(
        \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\CruiseLinePrefsAType\CruiseLinePrefAType $cruiseLinePref
    ) {
        $this->cruiseLinePrefs[] = $cruiseLinePref;

        return $this;
    }

    /**
     * isset cruiseLinePrefs
     *
     * Collection of cruise line preferences.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCruiseLinePrefs($index)
    {
        return isset($this->cruiseLinePrefs[$index]);
    }

    /**
     * unset cruiseLinePrefs
     *
     * Collection of cruise line preferences.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCruiseLinePrefs($index)
    {
        unset($this->cruiseLinePrefs[$index]);
    }

    /**
     * Gets as cruiseLinePrefs
     *
     * Collection of cruise line preferences.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\CruiseLinePrefsAType\CruiseLinePrefAType[]
     */
    public function getCruiseLinePrefs()
    {
        return $this->cruiseLinePrefs;
    }

    /**
     * Sets a new cruiseLinePrefs
     *
     * Collection of cruise line preferences.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\CruiseLinePrefsAType\CruiseLinePrefAType[]
     * $cruiseLinePrefs
     * @return self
     */
    public function setCruiseLinePrefs(array $cruiseLinePrefs)
    {
        $this->cruiseLinePrefs = $cruiseLinePrefs;

        return $this;
    }

    /**
     * Adds as regionPref
     *
     * Specifies geographical region to include in the response.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\RegionPrefAType
     * $regionPref
     */
    public function addToRegionPref(\Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\RegionPrefAType $regionPref)
    {
        $this->regionPref[] = $regionPref;

        return $this;
    }

    /**
     * isset regionPref
     *
     * Specifies geographical region to include in the response.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRegionPref($index)
    {
        return isset($this->regionPref[$index]);
    }

    /**
     * unset regionPref
     *
     * Specifies geographical region to include in the response.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRegionPref($index)
    {
        unset($this->regionPref[$index]);
    }

    /**
     * Gets as regionPref
     *
     * Specifies geographical region to include in the response.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\RegionPrefAType[]
     */
    public function getRegionPref()
    {
        return $this->regionPref;
    }

    /**
     * Sets a new regionPref
     *
     * Specifies geographical region to include in the response.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ\RegionPrefAType[]
     * $regionPref
     * @return self
     */
    public function setRegionPref(array $regionPref)
    {
        $this->regionPref = $regionPref;

        return $this;
    }

    /**
     * Gets as multimodalOffer
     *
     * Multimodal offer influencers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MultiModalOfferType
     */
    public function getMultimodalOffer()
    {
        return $this->multimodalOffer;
    }

    /**
     * Sets a new multimodalOffer
     *
     * Multimodal offer influencers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer
     * @return self
     */
    public function setMultimodalOffer(\Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer)
    {
        $this->multimodalOffer = $multimodalOffer;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}
