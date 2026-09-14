<?php
namespace QuickBooksOnline\API\Data;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType IntuitEntity
 * @xmlName IPPEnabledSurchargeInfo
 * @var IPPEnabledSurchargeInfo
 * @xmlDefinition
				Product: QBO
				Description: Per-invoice surcharging settings

 */
class IPPEnabledSurchargeInfo
	extends IPPIntuitEntity	{

		/**
		* Initializes this object, optionally with pre-defined property values
		*
		* Initializes this object and it's property members, using the dictionary
		* of key/value pairs passed as an optional argument.
		*
		* @param dictionary $keyValInitializers key/value pairs to be populated into object's properties
		* @param boolean $verbose specifies whether object should echo warnings
		*/
		public function __construct($keyValInitializers=array(), $verbose=FALSE)
		{
			foreach($keyValInitializers as $initPropName => $initPropVal)
			{
				if (property_exists('IPPEnabledSurchargeInfo',$initPropName) || property_exists('QuickBooksOnline\API\Data\IPPEnabledSurchargeInfo',$initPropName))
				{
					$this->{$initPropName} = $initPropVal;
				}
				else
				{
					if ($verbose)
						echo "Property does not exist ($initPropName) in class (".get_class($this).")";
				}
			}
		}


	/**
	 * @Definition
								Product: QBO
								Description: Whether surcharging is enabled for the invoice

	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName Enabled
	 * @var boolean
	 */
	public $Enabled;
	/**
	 * @Definition
								Product: QBO
								Description: Card surcharge settings

	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName Card
	 * @var com\intuit\schema\finance\v3\IPPSurchargePaymentMethodInfo
	 */
	public $Card;
	/**
	 * @Definition
								Product: QBO
								Description: ACH surcharge settings

	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName ACH
	 * @var com\intuit\schema\finance\v3\IPPSurchargePaymentMethodInfo
	 */
	public $ACH;


} // end class IPPEnabledSurchargeInfo
