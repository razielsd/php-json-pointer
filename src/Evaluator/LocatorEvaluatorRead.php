<?php

namespace Remorhaz\JSONPointer\Evaluator;

class LocatorEvaluatorRead extends LocatorEvaluator
{


    protected function evaluateLocator()
    {
        return $this->setResult($this->getCursor()->getData());
    }

    
    protected function createReferenceEvaluator(): ReferenceEvaluator
    {
        return ReferenceEvaluatorRead::factory()
            ->setAdvancer($this->createAdvancer());
    }
}
