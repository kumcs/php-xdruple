<?php declare(strict_types=1);

namespace Xtuple\Xdruple\Application\Service\Finder\Extension\Type\Profile;

use Xtuple\Xdruple\Application\Service\Finder\Extension\AbstractExtension;
use Xtuple\Xdruple\Application\Service\Finder\Extension\ExtensionStruct;
use Xtuple\Xdruple\Application\Service\Finder\Extension\Type\Type;

abstract class AbstractProfile
  extends AbstractExtension {
  public function __construct(string $name) {
    parent::__construct(new ExtensionStruct(Type::PROFILE(), $name));
  }
}
