<?php

namespace Office365;
use Office365\Graph\Entity;
use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;


class EntityType extends Entity
{

    public function getObjectProperty()
    {
        if(!$this->isPropertyAvailable("{name}")){
            $this->setProperty("{name}", new ClientObject($this->getContext(),
                new ResourcePath("{name}",$this->getResourcePath())));
        }
        return $this->getProperty("{name}");
    }

    public function getValueProperty()
    {
        if(!$this->isPropertyAvailable("{name}")){
            return null;
        }
        return $this->getProperty("{name}");
    }

    public function setValueProperty($value)
    {
        $this->setProperty("{name}",$value,true);
        return $this;
    }

}