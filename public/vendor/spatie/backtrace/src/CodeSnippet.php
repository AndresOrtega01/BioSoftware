<?php

namespace Spatie\Backtrace;

use RuntimeException;

class CodeSnippet
{
    /** @var int */
    protected $surroundingLine = 1;

    /** @var int */
    protected $snippetLineCount = 9;

    public function surroundingLine(int $surroundingLine): self
    {
        $this->surroundingLine = $surroundingLine;

        return $this;
    }

    public function snippetLineCount(int $snippetLineCount): self
    {
        $this->snippetLineCount = $snippetLineCount;

        return $this;
    }

    public function get(string $fileName): array
    {
        if (! file_exists($fileName)) {
            return [];
        }

        try {
            $file = new File($fileName);

            [$stacrtlineNumber, $endLineNumber] = $this->getBounds($file->numberOfLines());

            $code = [];

            $line = $file->getLine($stacrtlineNumber);

            $currentLineNumber = $stacrtlineNumber;

            while ($currentLineNumber <= $endLineNumber) {
                $code[$currentLineNumber] = rtrim(substr($line, 0, 250));

                $line = $file->getNextLine();
                $currentLineNumber++;
            }

            return $code;
        } catch (RuntimeException $exception) {
            return [];
        }
    }

    protected function getBounds(int $totalNumberOfLineInFile): array
    {
        $stacrtline = max($this->surroundingLine - floor($this->snippetLineCount / 2), 1);

        $endLine = $stacrtline + ($this->snippetLineCount - 1);

        if ($endLine > $totalNumberOfLineInFile) {
            $endLine = $totalNumberOfLineInFile;
            $stacrtline = max($endLine - ($this->snippetLineCount - 1), 1);
        }

        return [$stacrtline, $endLine];
    }
}
