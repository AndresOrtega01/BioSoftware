<?php

declare(strict_types=1);

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Carbon\PHPStan;

if (!class_exists(LazyMacro::class, false)) {
    abstract class LazyMacro extends AbstractMacro
    {
        /**
         * {@inheritdoc}
         */
        public function getFileName(): ?string
        {
            return $this->reflectionFunction->getFileName();
        }

        /**
         * {@inheritdoc}
         */
        public function getStacrtline(): ?int
        {
            return $this->reflectionFunction->getStacrtline();
        }

        /**
         * {@inheritdoc}
         */
        public function getEndLine(): ?int
        {
            return $this->reflectionFunction->getEndLine();
        }
    }
}
