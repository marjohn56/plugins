<?php

/*
 *    Copyright (C) 2015-2024 Deciso B.V.
 *    Copyright (C) 2015 Jos Schellevis <jos@opnsense.org>
 *    Copyright (C) 2017 Fabian Franz
 *    Copyright (C) 2017 Michael Muenz <m.muenz@gmail.com>
 *    All rights reserved.
 *
 *    Redistribution and use in source and binary forms, with or without
 *    modification, are permitted provided that the following conditions are met:
 *
 *    1. Redistributions of source code must retain the above copyright notice,
 *       this list of conditions and the following disclaimer.
 *
 *    2. Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *
 *    THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES,
 *    INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
 *    AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *    AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
 *    OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 *    SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 *    INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 *    CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *    ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *    POSSIBILITY OF SUCH DAMAGE.
 */

namespace OPNsense\Quagga\Api;

use OPNsense\Quagga\OSPF6;
use OPNsense\Core\Config;
use OPNsense\Base\ApiMutableModelControllerBase;
use OPNsense\Base\UIModelGrid;

class Ospf6settingsController extends ApiMutableModelControllerBase
{
    protected static $internalModelName = 'ospf6';
    protected static $internalModelClass = '\OPNsense\Quagga\OSPF6';

    public function searchNetworkAction()
    {
        return $this->searchBase('networks.network');
    }
    public function searchInterfaceAction()
    {
        return $this->searchBase('interfaces.interface');
    }
    public function searchPrefixlistAction()
    {
        return $this->searchBase('prefixlists.prefixlist');
    }
    public function searchRoutemapAction()
    {
        return $this->searchBase('routemaps.routemap');
    }
    public function getNetworkAction($uuid = null)
    {
        return $this->getBase('network', 'networks.network', $uuid);
    }
    public function getInterfaceAction($uuid = null)
    {
        return $this->getBase('interface', 'interfaces.interface', $uuid);
    }
    public function getPrefixlistAction($uuid = null)
    {
        return $this->getBase('prefixlist', 'prefixlists.prefixlist', $uuid);
    }
    public function getRoutemapAction($uuid = null)
    {
        return $this->getBase('routemap', 'routemaps.routemap', $uuid);
    }
    public function addNetworkAction()
    {
        return $this->addBase('network', 'networks.network');
    }
    public function addInterfaceAction()
    {
        return $this->addBase('interface', 'interfaces.interface');
    }
    public function addPrefixlistAction()
    {
        return $this->addBase('prefixlist', 'prefixlists.prefixlist');
    }
    public function addRoutemapAction()
    {
        return $this->addBase('routemap', 'routemaps.routemap');
    }
    public function delNetworkAction($uuid)
    {
        return $this->delBase('networks.network', $uuid);
    }
    public function delInterfaceAction($uuid)
    {
        return $this->delBase('interfaces.interface', $uuid);
    }
    public function delPrefixlistAction($uuid)
    {
        return $this->delBase('prefixlists.prefixlist', $uuid);
    }
    public function delRoutemapAction($uuid)
    {
        return $this->delBase('routemaps.routemap', $uuid);
    }
    public function setNetworkAction($uuid)
    {
        return $this->setBase('network', 'networks.network', $uuid);
    }
    public function setInterfaceAction($uuid)
    {
        return $this->setBase('interface', 'interfaces.interface', $uuid);
    }
    public function setPrefixlistAction($uuid)
    {
        return $this->setBase('prefixlist', 'prefixlists.prefixlist', $uuid);
    }
    public function setRoutemapAction($uuid)
    {
        return $this->setBase('routemap', 'routemaps.routemap', $uuid);
    }
    public function toggleNetworkAction($uuid)
    {
        return $this->toggleBase('networks.network', $uuid);
    }
    public function toggleInterfaceAction($uuid)
    {
        return $this->toggleBase('interfaces.interface', $uuid);
    }
    public function togglePrefixlistAction($uuid)
    {
        return $this->toggleBase('prefixlists.prefixlist', $uuid);
    }
    public function toggleRoutemapAction($uuid)
    {
        return $this->toggleBase('routemaps.routemap', $uuid);
    }
    public function searchRedistributionAction()
    {
        return $this->searchBase('redistributions.redistribution');
    }
    public function getRedistributionAction($uuid = null)
    {
        return $this->getBase('redistribution', 'redistributions.redistribution', $uuid);
    }
    public function addRedistributionAction()
    {
        return $this->addBase('redistribution', 'redistributions.redistribution');
    }
    public function delRedistributionAction($uuid)
    {
        return $this->delBase('redistributions.redistribution', $uuid);
    }
    public function setRedistributionAction($uuid)
    {
        return $this->setBase('redistribution', 'redistributions.redistribution', $uuid);
    }
    public function toggleRedistributionAction($uuid)
    {
        return $this->toggleBase('redistributions.redistribution', $uuid);
    }
}
