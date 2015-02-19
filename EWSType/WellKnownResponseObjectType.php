<?php
/**
 * Contains \jamesiarmes\PEWS\Type\WellKnownResponseObjectType.
 */

namespace jamesiarmes\PEWS\Type;

use \jamesiarmes\PEWS\Type;

/**
 * Base class fot meeting request replies.
 *
 * @package php-ews\Types
 */
abstract class WellKnownResponseObjectType extends Type
{
    /**
     * Contains the item or file that is attached to an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\ArrayOfAttachmentsType
     */
    public $Attachments;

    /**
     * Represents a collection of recipients to receive a blind carbon copy
     * (Bcc) of an e-mail.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $BccRecipients;

    /**
     * Represents the actual body content of a message.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\BodyType
     */
    public $Body;

    /**
     * Represents a collection of recipients that will receive a copy of the
     * message.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $CcRecipients;

    /**
     * Represents the Internet message header name for a given header within the
     * headers collection.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfInternetHeadersType
     */
    public $InternetMessageHeaders;

    /**
     * Indicates whether the sender of an item requests a delivery receipt.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsDeliveryReceiptRequested;

    /**
     * Indicates whether the sender of an item requests a read receipt.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsReadReceiptRequested;

    /**
     * Represents the message class of an item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Enumeration\ItemClassType
     */
    public $ItemClass;

    /**
     * Identifies the delegate in a delegate access scenario.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PEWS\Type\SingleRecipientType
     */
    public $ReceivedBy;

    /**
     * Identifies the principal in a delegate access scenario.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PEWS\Type\SingleRecipientType
     */
    public $ReceivedRepresenting;

    /**
     * Identifies the item to which the response object refers.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\ItemIdType
     */
    public $ReferenceItemId;

    /**
     * Identifies the sender of an item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\SingleRecipientType
     */
    public $Sender;

    /**
     * Indicates the sensitivity level of an item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Enumeration\SensitivityChoicesType
     */
    public $Sensitivity;

    /**
     * Contains a set of recipients of an item.
     *
     * These are the primary recipients of an item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $ToRecipients;
}
