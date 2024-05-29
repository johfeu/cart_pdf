<?php
declare(strict_types=1);
namespace Extcode\CartPdf\Domain\Model\Dto;

/*
 * This file is part of the package extcode/cart-pdf.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

class PdfDemand extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * @var int
     */
    protected $debug = 0;

    /**
     * @var int
     */
    protected $fontSize = 8;

    /**
     * @var bool
     */
    protected $foldMarksEnabled = true;

    /**
     * @var bool
     */
    protected $addressFieldMarksEnabled = true;

    public function getDebug(): int
    {
        return $this->debug;
    }

    public function setDebug(int $debug): void
    {
        if ($debug) {
            $this->debug = $debug;
        }
    }

    public function getFontSize(): int
    {
        return $this->fontSize;
    }

    public function setFontSize(int $fontSize): void
    {
        if ($fontSize) {
            $this->fontSize = $fontSize;
        }
    }

    public function getFoldMarksEnabled(): bool
    {
        return $this->foldMarksEnabled;
    }

    public function setFoldMarksEnabled(bool $foldMarksEnabled): void
    {
        $this->foldMarksEnabled = $foldMarksEnabled;
    }

    public function getAddressFieldMarksEnabled(): bool
    {
        return $this->addressFieldMarksEnabled;
    }

    public function setAddressFieldMarksEnabled(bool $addressFieldMarksEnabled): void
    {
        $this->addressFieldMarksEnabled = $addressFieldMarksEnabled;
    }
}
