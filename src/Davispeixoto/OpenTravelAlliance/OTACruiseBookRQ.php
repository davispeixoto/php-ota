<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTACruiseBookRQ
 */
class OTACruiseBookRQ
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
     * @property string $transactionActionCode
     */
    private $transactionActionCode = null;

    /**
     * Point of sale object.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * Specifies the information of the an agent who is creating or modifying the
     * booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTACruiseBookRQ\AgentInfoAType
     * $agentInfo
     */
    private $agentInfo = null;

    /**
     * Specifies the information of the deleted guest from the current booking.
     * Normally used in Modification mode.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTACruiseBookRQ\DeletedGuestAType[]
     * $deletedGuest
     */
    private $deletedGuest = null;

    /**
     * Specifies the selected category to book.Contains information related to the
     * selected sailing. Typically the selected sailing is one of the sailings returned
     * in the previous sailing availability response.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType $sailingInfo
     */
    private $sailingInfo = null;

    /**
     * Specifies information about the booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType $reservationInfo
     */
    private $reservationInfo = null;

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
     * Gets as transactionActionCode
     *
     * @return string
     */
    public function getTransactionActionCode()
    {
        return $this->transactionActionCode;
    }

    /**
     * Sets a new transactionActionCode
     *
     * @param string $transactionActionCode
     * @return self
     */
    public function setTransactionActionCode($transactionActionCode)
    {
        $this->transactionActionCode = $transactionActionCode;

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
     * Gets as agentInfo
     *
     * Specifies the information of the an agent who is creating or modifying the
     * booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTACruiseBookRQ\AgentInfoAType
     */
    public function getAgentInfo()
    {
        return $this->agentInfo;
    }

    /**
     * Sets a new agentInfo
     *
     * Specifies the information of the an agent who is creating or modifying the
     * booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTACruiseBookRQ\AgentInfoAType
     * $agentInfo
     * @return self
     */
    public function setAgentInfo(\Davispeixoto\OpenTravelAlliance\OTACruiseBookRQ\AgentInfoAType $agentInfo)
    {
        $this->agentInfo = $agentInfo;

        return $this;
    }

    /**
     * Adds as deletedGuest
     *
     * Specifies the information of the deleted guest from the current booking.
     * Normally used in Modification mode.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTACruiseBookRQ\DeletedGuestAType
     * $deletedGuest
     */
    public function addToDeletedGuest(\Davispeixoto\OpenTravelAlliance\OTACruiseBookRQ\DeletedGuestAType $deletedGuest)
    {
        $this->deletedGuest[] = $deletedGuest;

        return $this;
    }

    /**
     * isset deletedGuest
     *
     * Specifies the information of the deleted guest from the current booking.
     * Normally used in Modification mode.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDeletedGuest($index)
    {
        return isset($this->deletedGuest[$index]);
    }

    /**
     * unset deletedGuest
     *
     * Specifies the information of the deleted guest from the current booking.
     * Normally used in Modification mode.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDeletedGuest($index)
    {
        unset($this->deletedGuest[$index]);
    }

    /**
     * Gets as deletedGuest
     *
     * Specifies the information of the deleted guest from the current booking.
     * Normally used in Modification mode.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTACruiseBookRQ\DeletedGuestAType[]
     */
    public function getDeletedGuest()
    {
        return $this->deletedGuest;
    }

    /**
     * Sets a new deletedGuest
     *
     * Specifies the information of the deleted guest from the current booking.
     * Normally used in Modification mode.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTACruiseBookRQ\DeletedGuestAType[]
     * $deletedGuest
     * @return self
     */
    public function setDeletedGuest(array $deletedGuest)
    {
        $this->deletedGuest = $deletedGuest;

        return $this;
    }

    /**
     * Gets as sailingInfo
     *
     * Specifies the selected category to book.Contains information related to the
     * selected sailing. Typically the selected sailing is one of the sailings returned
     * in the previous sailing availability response.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType
     */
    public function getSailingInfo()
    {
        return $this->sailingInfo;
    }

    /**
     * Sets a new sailingInfo
     *
     * Specifies the selected category to book.Contains information related to the
     * selected sailing. Typically the selected sailing is one of the sailings returned
     * in the previous sailing availability response.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType $sailingInfo
     * @return self
     */
    public function setSailingInfo(\Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType $sailingInfo)
    {
        $this->sailingInfo = $sailingInfo;

        return $this;
    }

    /**
     * Gets as reservationInfo
     *
     * Specifies information about the booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType
     */
    public function getReservationInfo()
    {
        return $this->reservationInfo;
    }

    /**
     * Sets a new reservationInfo
     *
     * Specifies information about the booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType $reservationInfo
     * @return self
     */
    public function setReservationInfo(\Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType $reservationInfo)
    {
        $this->reservationInfo = $reservationInfo;

        return $this;
    }


}
