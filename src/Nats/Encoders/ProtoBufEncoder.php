<?php
namespace Nats\Encoders;

/**
 * Class ProtoBufEncoder
 *
 * Encodes and decodes messages in ProtoBuf format.
 *
 * @package Nats
 */
class ProtoBufEncoder implements Encoder
{


    /**
     * Encodes a message to ProtoBuf.
     *
     * @param string $payload Message to decode.
     *
     * @return mixed
     */
    public function encode($payload)
    {
        //$payload = ProtoBuf_encode($payload);
        return $payload;
    }

    /**
     * Decodes a message from ProtoBuf.
     *
     * @param string $payload Message to decode.
     *
     * @return mixed
     */
    public function decode($payload)
    {
        //$payload = ProtoBuf_decode($payload);
        return $payload;
    }
}
