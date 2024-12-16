<?php

declare(strict_types=1);

/**
 * SPDX-License-Identifier: Apache-2.0
 *
 * The OpenSearch Contributors require contributions made to
 * this file be licensed under the Apache-2.0 license or a
 * compatible open source license.
 *
 * Modifications Copyright OpenSearch Contributors. See
 * GitHub history for details.
 */

namespace OpenSearch\Endpoints\Sm;

use OpenSearch\Common\Exceptions\RuntimeException;
use OpenSearch\Endpoints\AbstractEndpoint;

/**
 * NOTE: This file is autogenerated using util/GenerateEndpoints.php
 */
class UpdatePolicy extends AbstractEndpoint
{
    protected $policy_name;

    public function getURI(): string
    {
        $policy_name = $this->policy_name ?? null;
        if (isset($policy_name)) {
            return "/_plugins/_sm/policies/$policy_name";
        }
        throw new RuntimeException('Missing parameter for the endpoint sm.update_policy');
    }

    public function getParamWhitelist(): array
    {
        return [
            'if_primary_term',
            'if_seq_no',
            'pretty',
            'human',
            'error_trace',
            'source',
            'filter_path'
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function setBody($body): static
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setPolicyName($policy_name): static
    {
        if (isset($policy_name) !== true) {
            return $this;
        }
        $this->policy_name = $policy_name;

        return $this;
    }
}
