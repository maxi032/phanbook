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
use Phanbook\Badges\BadgeBase;

/**
 * Phanbook\Badges\Badge\Illuminator
 *
 * More than 50 accepted replies
 */
class Illuminator extends BadgeBase
{
    protected $name = 'Illuminator';

    protected $description = 'More than 50 accepted answers';

    /**
     * Check whether the user can have the badge
     *
     * @param  Users $user
     * @return boolean
     */
    public function canHave(Users $user)
    {
        return $user->countReplies('accepted = "Y"') >= 50;
    }
}
