<?php
namespace Atsosie11/Author;

require_once ("autoload.php");
require_once (dirname(__DIR__, 2) . "/vendor/autoload.php");

use Ramsey\Uuid\Uuid;
/**
 * Typical profile for author profile.
 *
 * @Author Adrian Tsosie <atsosie11@cnm.edu>
 * @version 3.0.0
 */
class Author {
	/**
	 * id for the Author name.
	 * @var Uuid authorId
	 */
	private $authorId;
	/**
	 * url target for account login
	 * @var string authorAvatorUrl
	 */
	private $authorAvatarUrl;
	/**
	 * login for authors account
	 * @var string authorActivationToken
	 */
	private $authorActivationToken;
	/**
	 * email address for author
	 * @var string authorEmail
	 */
	private $authorEmail;
	/**
	 * has tag for the user
	 * @var string authorHas
 	**/
	private $authorHash;
	/**
	 * the user name for the account
	 * @var string authorUsername
 	*/
	private $authorUsername;
	/**
	 * accessor method for author id
	 *
	 * @return Uuid value of author id (or null if new author)
	 **/

	public function getAuthorId(): {
		return ($this->authorId);
	}
	/**
	 *mutator method for author id
	 *
	 * @param  Uuid| string $newAuthorId value of new author id
	 * @throws \RangeException if $newAuthorId is not positive
	 **/

	/**
	 * accessor method for author avatar url
	 *
	 * @return string value of the author avatar url
	 */
	public function getAuthorAvatarUrl() : ?string {
		return ($this->authorAvatarUrl);
	}
	/**
	 * mutator method for author avatar url
	 *
	 * @param string $newAuthorAvatarUrl
	 * @throws \RangeException if the token is not exactly 32 characters
	 * @throws \TypeError if the activation token is not a string
	 */

	/**
	 * accessor method for author activation token
	 *
	 * @return string value of the author activation token
	 */
	public function getAuthorActivationToken() : ?string {
		return ($this->authorActivationToken);
	}
	/**
	 * mutator method for author activation token
	 *
	 * @param string $newAuthorActivationToken
	 * @throws \RangeException if the token is not exactly 32 characters
	 * @throws \TypeError if the activation token is not a string
	 */

	/**
	 * accessor method for author email
	 *
	 * @return string value of author email
	 **/
	public function getAuthorEmail(): string {
		return ($this->authorEmail);
	}
	/**
	 * mutator method for at handle
	 *
	 * @param string $newProfileAtHandle new value of at handle
	 * @throws \InvalidArgumentException if $newAtHandle is not a string or insecure
	 * @throws \RangeException if $newAtHandle is > 32 characters
	 * @throws \TypeError if $newAtHandle is not a string
	 **/

	public function setProfileActivationToken(?string $newProfileActivationToken): void {
		if($newProfileActivationToken === null) {
			$this->profileActivationToken = null;
			return;
		}
		$newProfileActivationToken = strtolower(trim($newProfileActivationToken));
		if(ctype_xdigit($newProfileActivationToken) === false) {
			throw(new\RangeException("user activation is not valid"));
		}
		//make sure user activation token is only 32 characters
		if(strlen($newProfileActivationToken) !== 32) {
			throw(new\RangeException("user activation token has to be 32"));
		}
		$this->profileActivationToken = $newProfileActivationToken;
	}

}

