<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Details specific to an Express freight shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ExpressFreightDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ExpressFreightDetail';

    /**
     * Indicates whether or nor a packing list is enclosed.
     *
     * @param boolean $packingListEnclosed
     * return ExpressFreightDetail
     */
    public function setPackingListEnclosed($packingListEnclosed)
    {
        $this->PackingListEnclosed = $packingListEnclosed;
        return $this;
    }
    
    /**
     * 
                Total shipment pieces.
                ie. 3 boxes and 3 pallets of 100 pieces each = Shippers Load and Count of 303.
                Applicable to International Priority Freight and International Economy Freight.
                Values must be in the range of 1 - 99999
              
     *
     * @param positiveInteger $shippersLoadAndCount
     * return ExpressFreightDetail
     */
    public function setShippersLoadAndCount($shippersLoadAndCount)
    {
        $this->ShippersLoadAndCount = $shippersLoadAndCount;
        return $this;
    }
    
    /**
     * Required for International Freight shipping. Values must be 8- 12 characters in length.
     *
     * @param string $bookingConfirmationNumber
     * return ExpressFreightDetail
     */
    public function setBookingConfirmationNumber($bookingConfirmationNumber)
    {
        $this->BookingConfirmationNumber = $bookingConfirmationNumber;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param boolean $referenceLabelRequested
     * return ExpressFreightDetail
     */
    public function setReferenceLabelRequested($referenceLabelRequested)
    {
        $this->ReferenceLabelRequested = $referenceLabelRequested;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param ExpressFreightDetailContact $beforeDeliveryContact
     * return ExpressFreightDetail
     */
    public function setBeforeDeliveryContact(ExpressFreightDetailContact $beforeDeliveryContact)
    {
        $this->BeforeDeliveryContact = $beforeDeliveryContact;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param ExpressFreightDetailContact $undeliverableContact
     * return ExpressFreightDetail
     */
    public function setUndeliverableContact(ExpressFreightDetailContact $undeliverableContact)
    {
        $this->UndeliverableContact = $undeliverableContact;
        return $this;
    }
    

    
}