<?php
/**
 * PageMetadata
 */
namespace app\Models;

/**
 * PageMetadata
 * @description Contains opaque identifier, `nextoffset`, for paginated result sets. The `nextOffset` ID doesn't need to be numeric or have any specific pattern. In other words, your organization can implement this however you prefer. The presence of this offset indicates that there's at least one more page of data available. The absence of this offset indicates that there are no more pages of data left in this paginated array. The API consumer returns this in the `offset` parameter in a new request to get the next page in the response array.
 */
class PageMetadata {

    /** @var string $nextOffset Opaque offset identifier.*/
    public $nextOffset = "";

}
