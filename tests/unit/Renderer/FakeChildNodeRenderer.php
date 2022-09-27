<?php


namespace N0sz\CommonMark\Tests\Unit\Renderer;

use League\CommonMark\Renderer\ChildNodeRendererInterface;

final class FakeChildNodeRenderer implements ChildNodeRendererInterface
{
    private bool $alwaysOutputChildren = false;

    public function pretendChildrenExist(): void
    {
        $this->alwaysOutputChildren = true;
    }

    /**
     * {@inheritDoc}
     */
    public function renderNodes(iterable $nodes): string
    {
        if ($this->alwaysOutputChildren) {
            return '::children::';
        }

        // Only return '::children::' if the iterable isn't empty
        foreach ($nodes as $node) {
            return '::children::';
        }

        return '';
    }

    public function getBlockSeparator(): string
    {
        return '';
    }

    public function getInnerSeparator(): string
    {
        return '';
    }
}