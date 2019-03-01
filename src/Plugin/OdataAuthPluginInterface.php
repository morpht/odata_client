<?php

namespace Drupal\odata_client\Plugin;

use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\odata_client\Entity\OdataServerInterface;
use Drupal\Core\DependencyInjection\Container;

/**
 * Defines an interface for Odata auth plugin plugins.
 */
interface OdataAuthPluginInterface extends PluginInspectionInterface {


  public function getAccessToken(OdataServerInterface $config,
    Container $serviceContainer);

}
