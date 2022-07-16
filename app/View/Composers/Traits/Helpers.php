<?php

namespace App\View\Composers\Traits;

trait Helpers
{
    /**
     * isEmpty
     *
     * @see https://stackoverflow.com/questions/4014327/best-way-to-check-a-empty-array
     * @return boolean
     */
    public function isEmpty( $value = null )
    {
        if ( is_array( $value ) ) {
            $empty = TRUE;
            array_walk_recursive( $value, function( $item ) use ( &$empty ) {
                $empty = $empty && empty( $item );
            });
        } else {
            $empty = empty( $value );
        }

        return $empty;
    }

    /**
     * Return field only if at least 1 field have value
     *
     * @return mixed|null
     */
    public function getCheckedField( $field_name = null, $post_id = false )
    {
        $field = get_field( $field_name, $post_id );

        return ( ! $this->isEmpty( $field ) )
            ? $field
            : null;
    }

    /**
     * @param array
     * @return array
     */
    public function getCheckedItems( $items )
    {
        return ( ! $this->isEmpty( $items ) )
            ? $items
            : [];
    }
}
