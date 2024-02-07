<?php

/**
 * MetadataApi
 * PHP version 5
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mailchimp Transactional API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.57
 * Contact: apihelp@mailchimp.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MailchimpTransactional\Api;

use MailchimpTransactional\ApiException;
use MailchimpTransactional\Configuration;
use MailchimpTransactional\HeaderSelector;
use MailchimpTransactional\ObjectSerializer;

/**
 * MetadataApi Class Doc Comment
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MetadataApi
{
    protected $config;

    public function __construct(Configuration $config = null)
    {
        $this->config = $config ?: new Configuration();
    }

    /**
     * Add metadata field
     * Add a new custom metadata field to be indexed for the account.
     */
    public function add($body = [])
    {
        return $this->config->post('/metadata/add', $body);
    }
    /**
     * Delete metadata field
     * Delete an existing custom metadata field. Deletion isn&#39;t instataneous, and /metadata/list will continue to return the field until the asynchronous deletion process is complete.
     */
    public function delete($body = [])
    {
        return $this->config->post('/metadata/delete', $body);
    }
    /**
     * List metadata fields
     * Get the list of custom metadata fields indexed for the account.
     */
    public function list($body = [])
    {
        return $this->config->post('/metadata/list', $body);
    }
    /**
     * Update metadata field
     * Update an existing custom metadata field.
     */
    public function update($body = [])
    {
        return $this->config->post('/metadata/update', $body);
    }
}
