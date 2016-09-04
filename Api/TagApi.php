<?php

namespace Valiknet\TogglBundle\Api;

use Valiknet\TogglBundle\Models\Tag;

class TagApi extends AbstractApi
{
    /**
     * @param Tag $tag
     * @return mixed
     */
    public function createTag(Tag $tag)
    {
        return $this->getTogglClient()->createTag(array(
            'tag' => $tag,
        ));
    }

    /**
     * @param Tag $tag
     * @param integer $id
     * @return mixed
     */
    public function updateTag(Tag $tag, $id)
    {
        return $this->getTogglClient()->updateTag(array(
            'tag' => $tag,
            'id' => $id,
        ));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteTag($id)
    {
        return $this->getTogglClient()->deleteTag(array(
            'id' => $id,
        ));
    }
}
