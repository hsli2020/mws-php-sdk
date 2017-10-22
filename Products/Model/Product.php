<?php

namespace Amazon\MWS\Products\Model;


/**
 * Product
 *
 * Properties:
 * <ul>
 *
 * <li>Identifiers: IdentifierType</li>
 * <li>AttributeSets: AttributeSetList</li>
 * <li>Relationships: RelationshipList</li>
 * <li>CompetitivePricing: CompetitivePricingType</li>
 * <li>SalesRankings: SalesRankList</li>
 * <li>LowestOfferListings: LowestOfferListingList</li>
 * <li>Offers: OffersList</li>
 *
 * </ul>
 */

 class Product extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Identifiers' => array('FieldValue' => null, 'FieldType' => 'IdentifierType'),
    'AttributeSets' => array('FieldValue' => null, 'FieldType' => 'AttributeSetList'),
    'Relationships' => array('FieldValue' => null, 'FieldType' => 'RelationshipList'),
    'CompetitivePricing' => array('FieldValue' => null, 'FieldType' => 'CompetitivePricingType'),
    'SalesRankings' => array('FieldValue' => null, 'FieldType' => 'SalesRankList'),
    'LowestOfferListings' => array('FieldValue' => null, 'FieldType' => 'LowestOfferListingList'),
    'Offers' => array('FieldValue' => null, 'FieldType' => 'OffersList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Identifiers property.
     *
     * @return IdentifierType Identifiers.
     */
    public function getIdentifiers()
    {
        return $this->_fields['Identifiers']['FieldValue'];
    }

    /**
     * Set the value of the Identifiers property.
     *
     * @param IdentifierType identifiers
     * @return this instance
     */
    public function setIdentifiers($value)
    {
        $this->_fields['Identifiers']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Identifiers is set.
     *
     * @return true if Identifiers is set.
     */
    public function isSetIdentifiers()
    {
                return !is_null($this->_fields['Identifiers']['FieldValue']);
            }

    /**
     * Set the value of Identifiers, return this.
     *
     * @param identifiers
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIdentifiers($value)
    {
        $this->setIdentifiers($value);
        return $this;
    }

    /**
     * Get the value of the AttributeSets property.
     *
     * @return AttributeSetList AttributeSets.
     */
    public function getAttributeSets()
    {
        return $this->_fields['AttributeSets']['FieldValue'];
    }

    /**
     * Set the value of the AttributeSets property.
     *
     * @param AttributeSetList attributeSets
     * @return this instance
     */
    public function setAttributeSets($value)
    {
        $this->_fields['AttributeSets']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AttributeSets is set.
     *
     * @return true if AttributeSets is set.
     */
    public function isSetAttributeSets()
    {
                return !is_null($this->_fields['AttributeSets']['FieldValue']);
            }

    /**
     * Set the value of AttributeSets, return this.
     *
     * @param attributeSets
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAttributeSets($value)
    {
        $this->setAttributeSets($value);
        return $this;
    }

    /**
     * Get the value of the Relationships property.
     *
     * @return RelationshipList Relationships.
     */
    public function getRelationships()
    {
        return $this->_fields['Relationships']['FieldValue'];
    }

    /**
     * Set the value of the Relationships property.
     *
     * @param RelationshipList relationships
     * @return this instance
     */
    public function setRelationships($value)
    {
        $this->_fields['Relationships']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Relationships is set.
     *
     * @return true if Relationships is set.
     */
    public function isSetRelationships()
    {
                return !is_null($this->_fields['Relationships']['FieldValue']);
            }

    /**
     * Set the value of Relationships, return this.
     *
     * @param relationships
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRelationships($value)
    {
        $this->setRelationships($value);
        return $this;
    }

    /**
     * Get the value of the CompetitivePricing property.
     *
     * @return CompetitivePricingType CompetitivePricing.
     */
    public function getCompetitivePricing()
    {
        return $this->_fields['CompetitivePricing']['FieldValue'];
    }

    /**
     * Set the value of the CompetitivePricing property.
     *
     * @param CompetitivePricingType competitivePricing
     * @return this instance
     */
    public function setCompetitivePricing($value)
    {
        $this->_fields['CompetitivePricing']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CompetitivePricing is set.
     *
     * @return true if CompetitivePricing is set.
     */
    public function isSetCompetitivePricing()
    {
                return !is_null($this->_fields['CompetitivePricing']['FieldValue']);
            }

    /**
     * Set the value of CompetitivePricing, return this.
     *
     * @param competitivePricing
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCompetitivePricing($value)
    {
        $this->setCompetitivePricing($value);
        return $this;
    }

    /**
     * Get the value of the SalesRankings property.
     *
     * @return SalesRankList SalesRankings.
     */
    public function getSalesRankings()
    {
        return $this->_fields['SalesRankings']['FieldValue'];
    }

    /**
     * Set the value of the SalesRankings property.
     *
     * @param SalesRankList salesRankings
     * @return this instance
     */
    public function setSalesRankings($value)
    {
        $this->_fields['SalesRankings']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SalesRankings is set.
     *
     * @return true if SalesRankings is set.
     */
    public function isSetSalesRankings()
    {
                return !is_null($this->_fields['SalesRankings']['FieldValue']);
            }

    /**
     * Set the value of SalesRankings, return this.
     *
     * @param salesRankings
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSalesRankings($value)
    {
        $this->setSalesRankings($value);
        return $this;
    }

    /**
     * Get the value of the LowestOfferListings property.
     *
     * @return LowestOfferListingList LowestOfferListings.
     */
    public function getLowestOfferListings()
    {
        return $this->_fields['LowestOfferListings']['FieldValue'];
    }

    /**
     * Set the value of the LowestOfferListings property.
     *
     * @param LowestOfferListingList lowestOfferListings
     * @return this instance
     */
    public function setLowestOfferListings($value)
    {
        $this->_fields['LowestOfferListings']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LowestOfferListings is set.
     *
     * @return true if LowestOfferListings is set.
     */
    public function isSetLowestOfferListings()
    {
                return !is_null($this->_fields['LowestOfferListings']['FieldValue']);
            }

    /**
     * Set the value of LowestOfferListings, return this.
     *
     * @param lowestOfferListings
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLowestOfferListings($value)
    {
        $this->setLowestOfferListings($value);
        return $this;
    }

    /**
     * Get the value of the Offers property.
     *
     * @return OffersList Offers.
     */
    public function getOffers()
    {
        return $this->_fields['Offers']['FieldValue'];
    }

    /**
     * Set the value of the Offers property.
     *
     * @param OffersList offers
     * @return this instance
     */
    public function setOffers($value)
    {
        $this->_fields['Offers']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Offers is set.
     *
     * @return true if Offers is set.
     */
    public function isSetOffers()
    {
                return !is_null($this->_fields['Offers']['FieldValue']);
            }

    /**
     * Set the value of Offers, return this.
     *
     * @param offers
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withOffers($value)
    {
        $this->setOffers($value);
        return $this;
    }

}
