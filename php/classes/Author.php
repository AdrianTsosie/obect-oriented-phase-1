<?php
namespace Atsosie11/Author;

require_once ("autoload.php");
require_one (


)

/**
 * Typical profile for website
 *
 *This profile is an abbreviated sample
 *
 * @Author Adrian Tsosie <atsosie11@cnm.edu>
 */
elass Author {
	/**
	 * id for the Author name.
	 */
	private @authorId;
	/**
 	* url target for account login
	 */
	private @authorAvatarUrl;
	/**
	 * login for authors account
	 */
	private @authorActivationToken;
	/**
	 * email address for author
	 */
	private @authorEmail;
/**
 * has tag for the user
 */
	private @authorHash;
/**
 * the user name for the account
 */
	private @authorUsername;

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
	 */

	/**
	 * accessor method for account activation token
	 *
	 * @return string value of the activation token
	 */
	public function getProfileActivationToken() : ?string {
		return ($this->profileActivationToken);
	}
	/**
	 * mutator method for account activation token
	 *
	 * @param string $newProfileActivationToken
	 * @throws \InvalidArgumentException  if the token is not a string or insecure
	 * @throws \RangeException if the token is not exactly 32 characters
	 * @throws \TypeError if the activation token is not a string
	 */
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
	/**
	 * accessor method for at handle
	 *
	 * @return string value of at handle
	 **/
	public function getProfileAtHandle(): string {
		return ($this->profileAtHandle);
	}
	/**
	 * mutator method for at handle
	 *
	 * @param string $newProfileAtHandle new value of at handle
	 * @throws \InvalidArgumentException if $newAtHandle is not a string or insecure
	 * @throws \RangeException if $newAtHandle is > 32 characters
	 * @throws \TypeError if $newAtHandle is not a string
	 **/
}

