<?php

namespace Symfony\Component\Messenger\Transport\Serialization;

interface IncomingMessageClassResolverInterface
{
    /**
     * @return class-string
     */
    public function __invoke(array $encodedEnvelope): string;
}
