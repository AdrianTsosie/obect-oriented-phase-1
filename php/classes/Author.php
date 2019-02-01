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
	public function setAuthorAvatarUrl(string $newAuthorAvatarUrl) : void {
		// verify the tweet content is secure
		$newAuthorAvatarUrl = trim($newAuthorAvatarUrl);
		$newAuthorAvatarUrl = filter_var($newAuthorAvatarUrl, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newAuthorAvatarUrl) === true) {
			throw(new \InvalidArgumentException("tweet content is empty or insecure"));
		}

		// verify the tweet content will fit in the database
		if(strlen($newAuthorAvatarUrl) > 140) {
			throw(new \RangeException("tweet content too large"));
		}

		// store the tweet content
		$this->authorAvatarUrl = $newAuthorAvatarUrl;
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
	public function setAuthorActivationToken(string $newAuthorActivationToken) : void {
		// verify the tweet content is secure
		$newAuthorActivationToken = trim($newAuthorActivationToken);
		$newAuthorActivationToken = filter_var($newAuthorActivationToken, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newAuthorActivationToken) === true) {
			throw(new \InvalidArgumentException("tweet content is empty or insecure"));
		}

		// verify the tweet content will fit in the database
		if(strlen($newAuthorActivationToken) > 140) {
			throw(new \RangeException("tweet content too large"));
		}

		// store the tweet content
		$this->authorActivationToken = $newAuthorActivationToken;
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
	public function setAuthorEmail(string $newAuthorEmail) : void {
		// verify the tweet content is secure
		$newAuthorEmail = trim($newAuthorEmail);
		$newAuthorEmail = filter_var($newAuthorEmail, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newAuthorEmail) === true) {
			throw(new \InvalidArgumentException("tweet content is empty or insecure"));
		}

		// verify the tweet content will fit in the database
		if(strlen($newAuthorEmail) > 140) {
			throw(new \RangeException("tweet content too large"));
		}

		// store the tweet content
		$this->authorEmail = $newAuthorEmail;
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
	public function setAuthorHash(string $newAuthorHash) : void {
		// verify the tweet content is secure
		$newAuthorHash = trim($newAuthorHash);
		$newAuthorHash = filter_var($newAuthorHash, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newAuthorHash) === true) {
			throw(new \InvalidArgumentException("tweet content is empty or insecure"));
		}

		// verify the tweet content will fit in the database
		if(strlen($newAuthorHash) > 140) {
			throw(new \RangeException("tweet content too large"));
		}

		// store the tweet content
		$this->authorHash = $newAuthorHash;
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
	public function setAuthorUserName(string $newAuthorUserName) : void {
		// verify the tweet content is secure
		$newAuthorUserName = trim($newAuthorUserName);
		$newAuthorUserName = filter_var($newAuthorUserName, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newAuthorUserName) === true) {
			throw(new \InvalidArgumentException("tweet content is empty or insecure"));
		}

		// verify the tweet content will fit in the database
		if(strlen($newAuthorUserName) > 140) {
			throw(new \RangeException("tweet content too large"));
		}

		// store the tweet content
		$this->authorUserName = $newAuthorUserName;
	}
/**
 * inserts this Author into mySQL
 *
 * @param \PDO $pdo PDO connection object
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError if $pdo is not a PDO connection object
 **/
public function insert(\PDO $pdo) : void {

	// create query template
	$query = "INSERT INTO Author(authorId, authorAvatarUrl, authorActivationToken, authorEmail, authorHash, authorUserName) 		VALUES(:authorId, :authorAvatarUrl, :authorActivationToken, :authorEmail, :authorHash, :authorUserName)";
	$statement = $pdo->prepare($query);

	// bind the member variables to the place holders in the template
	//$formattedDate = $this->tweetDate->format("Y-m-d H:i:s.u");
	$parameters = ["authorId" => $this->authorId->getBytes(), "authorAvatarUrl" => $this->authorAvatarUrl->getBytes(), "authorActivationToken" => $this->authorActivationToken, "authorEmail" => $this->authorEmail, "authorHash" => $this->authorHash, "authorUserName" => $this->authorUserName];
	$statement->execute($parameters);
}

	/**
	 * updates this Tweet in mySQL
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 **/
	public function update(\PDO $pdo) : void {

		// create query template
		$query = "UPDATE author SET authorEmail = :tauthorEmail, authorHash = :authorHash, authorHash = :authorHash WHERE authorId = :authorId";
		$statement = $pdo->prepare($query);


		//$formattedDate = $this->tweetDate->format("Y-m-d H:i:s.u");
		$parameters = ["authorId" => $this->authorId->getBytes(),"authorAvatarUrl" => $this->authorAvatarUrl->getBytes(), "authorUserName" => $this->authorUserName, "authorHash" => $authorHash];
		$statement->execute($parameters);
}


/**
 * deletes this Author from mySQL
 *
 * @param \PDO $pdo PDO connection object
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError if $pdo is not a PDO connection object
 **/
public function delete(\PDO $pdo) : void {

	// create query template
	$query = "DELETE FROM author WHERE authorHash = :authorHash";
	$statement = $pdo->prepare($query);

	// bind the member variables to the place holder in the template
	$parameters = ["authorHash" => $this->authorHash->getBytes()];
	$statement->execute($parameters);
}



