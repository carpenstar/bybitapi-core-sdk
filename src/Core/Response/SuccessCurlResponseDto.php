<?php

namespace Carpenstar\ByBitAPI\Core\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Interfaces\ICollectionInterface;
use Carpenstar\ByBitAPI\Core\Interfaces\ISuccessCurlResponseDtoInterface;

class SuccessCurlResponseDto implements ISuccessCurlResponseDtoInterface
{
    /**
     * @var \DateTime $time
     */
    private \DateTime $time;
    /**
     * @var int $retCode
     */
    private int $retCode;

    /**
     * @var string $retMsg
     */
    private string $retMsg;

    /**
     * @var array $retExtInfo
     */
    private array $retExtInfo = [];

    private string $nextPageCursor;

    private ICollectionInterface $body;


    /**
     * @param int $code
     * @return SuccessCurlResponseDto
     */
    public function setReturnCode(int $code): self
    {
        $this->retCode = $code;
        return $this;
    }

    /**
     * @return int
     */
    public function getReturnCode(): int
    {
        return $this->retCode;
    }

    /**
     * @param string $message
     * @return SuccessCurlResponseDto
     */
    public function setReturnMessage(string $message): self
    {
        $this->retMsg = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getReturnMessage(): string
    {
        return $this->retMsg;
    }

    /**
     * @param array $extInfo
     * @return SuccessCurlResponseDto
     */
    public function setReturnExtendedInfo(array $extInfo): self
    {
        $this->retExtInfo = $extInfo;
        return $this;
    }

    /**
     * @return array
     */
    public function getReturnExtendedInfo(): array
    {
        return $this->retExtInfo;
    }

    /**
     * @param int $time
     * @return SuccessCurlResponseDto
     */
    public function setTime(int $time): self
    {
        $this->time = DateTimeHelper::makeFromTimestamp($time);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTime(): \DateTime
    {
        return $this->time;
    }

    /**
     * @param $collection
     * @return $this
     */
    public function setBody($collection): self
    {
        $this->body = $collection;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getResult(): ICollectionInterface
    {
        return $this->body;
    }

    public function setNextPageCursor(string $cursor): self
    {
        $this->nextPageCursor = $cursor;
        return $this;
    }

    public function getNextPageCursor(): ?string
    {
        return $this->nextPageCursor;
    }
}
