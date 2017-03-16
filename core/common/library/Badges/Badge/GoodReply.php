<?php
/**
 * Phanbook : Delightfully simple forum software
 *
 * Licensed under The BSD License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @link    http://phanbook.com Phanbook Project
 * @since   1.0.0
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
 */
namespace Phanbook\Badges\Badge;

use Phanbook\Models\Users;
use Phanbook\Models\Categories;
use Phanbook\Models\PostsVotes;
use Phanbook\Models\PostsRepliesVotes;
use Phanbook\Badges\BadgeBase;

/**
 * Phanbook\Badges\Badge\GoodReply
 * @todo  later
 * Awarded one time per every question with more than 5 positive votes
 */
class GoodReply extends BadgeBase
{
    protected $name = 'Good Reply';

    protected $description = 'Awarded one time per every answer with more than 5 positive votes';

    /**
     * Check whether the user already have this badge
     *
     * @param  Users $user
     * @return boolean
     */
    public function has(Users $user)
    {
    }

    /**
     * Check whether the user can have the badge
     *
     * @param  Users $user
     * @return boolean
     */
    public function canHave(Users $user)
    {
    }

    /**
     * Add the badge to the user
     *
     * @param Users $user
     * @param array $extra
     */
    public function add(Users $user, $extra = null)
    {
    }
}
