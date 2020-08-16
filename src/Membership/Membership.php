<?php

/**
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 * Copyright (c) 2020 (original work) Open Assessment Technologies SA;
 */

declare(strict_types=1);

namespace OAT\Library\Lti1p3Nrps\Membership;

use OAT\Library\Lti1p3Nrps\Context\ContextInterface;
use OAT\Library\Lti1p3Nrps\Member\MemberCollectionInterface;

class Membership implements MembershipInterface
{
    /** @var string */
    private $identifier;

    /** @var ContextInterface */
    private $context;

    /** @var MemberCollectionInterface */
    private $members;

    public function __construct(string $identifier, ContextInterface $context, MemberCollectionInterface $members)
    {
        $this->identifier = $identifier;
        $this->context = $context;
        $this->members = $members;
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function getContext(): ContextInterface
    {
        return $this->context;
    }

    public function getMembers(): MemberCollectionInterface
    {
        return $this->members;
    }
}
