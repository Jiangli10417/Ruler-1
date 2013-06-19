<?php

namespace Rulez\Comparator;

/**
 * GreaterThan
 *
 * @uses AbstractComparator
 * @uses ComparatorInterface
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class GreaterThan extends AbstractComparator implements ComparatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function getToken ( ) {

        return '>';
    }

    /**
     * {@inheritdoc}
     */
    public function assert ( ) {

        return $this->left->getValue() > $this->right->getValue();
    }
}
