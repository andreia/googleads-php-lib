<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getReconciliationReportsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201802\ReconciliationReportPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201802\ReconciliationReportPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\ReconciliationReportPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\ReconciliationReportPage $rval
     * @return \Google\AdsApi\AdManager\v201802\getReconciliationReportsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
