<?php
namespace Atsosie11\Author;

require_once("autoload.php");
require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");

use Ramsey\Uuid\Uuid;
/**
 * Typical profile for author profile.
 *
 * @Author Adrian Tsosie <atsosie11@cnm.edu>
 * @version 3.0.0
 */
class Author {
	use ValidateDate;
	use ValidateUuid;
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
	private $authorUserName;

	public function __construct($newAuthorId, string $newAuthorAvatarUrl, string $newAuthorActivationToken, string $newAuthorEmail,
										 string $newAuthorHash, string $newAuthorUserName) {
		try {
			$this->setAuthorId($newAuthorId);
			$this->setAuthorAvatarUrl($newAuthorAvatarUrl);
			$this->setAuthorActivationToken($newAuthorActivationToken);
			$this->setAuthorEmail($newAuthorEmail);
			$this->setAuthorHash($newAuthorHash);
			$this->setAuthorUserName($newAuthorUserName);
		} //determine what exception type was thrown
		catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}


	/**
	 * accessor method for author id
	 *
	 * @return Uuid value of author id (or null if new author)
	 **/
	public function getAuthorId(): Uuid {
		return ($this->authorId);
	}

	/**
	 *mutator method for author id
	 *
	 * @param  Uuid| string $newAuthorId value of new author id
	 * @throws \RangeException if $newAuthorId is not positive
	 **/
	public function setAuthorId($newAuthorId): void {
		try {
			$uuid = self::validateUuid($newAuthorId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}

		// convert and store the author Id
		$this->authorId = $uuid;
	}

	/**
	 * accessor method for author avatar url
	 *
	 * @return string value of the author avatar url
	 */
	public function getAuthorAvatarUrl(): ?string {
		return ($this->authorAvatarUrl);
	}

	/**
	 * mutator method for author avatar url
	 *
	 * @param string $newAuthorAvatarUrl
	 * @throws \RangeException if the token is not exactly 32 characters
	 * @throws \TypeError if the activation token is not a string
	 */
	public function setAuthorAvatarUrl($newAuthorAvatarUrl): void {
		try {
			$uuid = self::validateUuid($newAuthorAvatarUrl);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}

		// convert and store the author avatar url
		$this->authorAvatarUrl = $uuid;
	}

	/**
	 * accessor method for author activation token
	 *
	 * @return string value of the author activation token
	 */
	public function getAuthorActivationToken(): ?string {
		return ($this->authorActivationToken);
	}

	/**
	 * mutator method for author activation token
	 *
	 * @param string $newAuthorActivationToken
	 * @throws \RangeException if the token is not exactly 32 characters
	 * @throws \TypeError if the activation token is not a string
	 */
	public function setAuthorActivationToken($newAuthorActivationToken): void {
		try {
			$uuid = self::validateUuid($newAuthorActivationToken);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}

		// convert and store the author activation token
		$this->authorActivationToken = $uuid;
	}

	/**
	 * accessor method for author email
	 *
	 * @return string value of author email
	 **/
	public function getAuthorEmail(): string {
		return ($this->authorEmail);
	}

	/**
	 * mutator method for at author email
	 *
	 * @param string $getAuthorEmail new value of at handle
	 * @throws \InvalidArgumentException if $newAuthorEmail is not a string or insecure
	 * @throws \RangeException if $newAuthorEmail is > 32 characters
	 * @throws \TypeError if $newAuthorEmail is not a string
	 **/
	public function setAuthorEmail($newAuthorEmail): void {
		try {
			$uuid = self::validateUuid($newAuthorEmail);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}

		// convert and store the AuthorId
		$this->authorEmail = $uuid;
	}

	/**
	 * accessor method for author hash
	 *
	 * @return string value of author hash
	 **/
	public function authorHash(): string {
		return ($this->authorHash);
	}

	/**
	 * mutator method for author hash
	 *
	 * @param string $authorHash new value of at handle
	 * @throws \InvalidArgumentException if $newAuthorHash is not a string or insecure
	 * @throws \RangeException if $newAuthorHash is > 32 characters
	 * @throws \TypeError if $newAuthorHash is not a string
	 **/
	public function setAuthorHash($newAuthorHash): void {
		try {
			$uuid = self::validateUuid($newAuthorHash);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}

		// convert and store the AuthorHash
		$this->authorHash = $uuid;
	}


	/**
	 * accessor method for author user name
	 *
	 * @return string value of author user name
	 **/
	public function authorUserName(): string {
		return ($this->authorUserName);
	}

	/**
	 * mutator method for author user name
	 *
	 * @param string $authorUserName new value of at handle
	 * @throws \InvalidArgumentException if $newAuthorUserName is not a string or insecure
	 * @throws \RangeException if $newAuthorUserName is > 32 characters
	 * @throws \TypeError if $newAuthorUserName is not a string
	 **/
	public function setAuthorUserName($newAuthorUserName): void {
		try {
			$uuid = self::validateUuid($newAuthorUserName);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}

		// convert and store the AuthorUserName
		$this->authorUserName = $uuid;
	}

}


