<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $lat;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $lng;

    /**
     * @ORM\OneToMany(targetEntity="Collection", mappedBy="user", cascade={"persist"})
     */
    private $collections;

    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="user", cascade={"persist"})
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity="Note", mappedBy="user", cascade={"persist"})
     */
    private $notes;

    /**
     * @ORM\ManyToMany(targetEntity="Book", inversedBy="userwishes")
     */
    private $bookwishes;

    /**
     * @ORM\OneToMany(targetEntity="Friend", mappedBy="user", cascade={"persist"})
     */
    private $myfriends;

    /**
     * @ORM\OneToMany(targetEntity="Friend", mappedBy="hasFriend", cascade={"persist"})
     */
    private $friendswithme;

    public function __construct()
    {
        parent::__construct();
        $this->collections = new ArrayCollection;
        $this->comments = new ArrayCollection;
        $this->notes = new ArrayCollection;
        $this->bookwishes = new ArrayCollection;
        $this->myfriends = new ArrayCollection;
        $this->friendswithme = new ArrayCollection;
    }

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of Address
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of Address
     *
     * @param mixed address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of Lat
     *
     * @return mixed
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set the value of Lat
     *
     * @param mixed lat
     *
     * @return self
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get the value of Lng
     *
     * @return mixed
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set the value of Lng
     *
     * @param mixed lng
     *
     * @return self
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get the value of Collections
     *
     * @return mixed
     */
    public function getCollections()
    {
        return $this->collections;
    }

    public function addCollection(Collection $collection)
    {
        $collection->setUser($this);
        $this->collections[] = $collection;
    }

    public function removeCollection(Collection $collection)
    {
        $this->collections->removeElement($collection);
    }

    /**
     * Get the value of Comments
     *
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    public function addComment(Comment $comment)
    {
        $comment->setUser($this);
        $this->comments[] = $comment;
    }

    public function removeComment(Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get the value of Notes
     *
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }

    public function addNote(Note $note)
    {
        $note->setUser($this);
        $this->notes[] = $note;
    }

    public function removeNote(Note $note)
    {
        $this->notes->removeElement($note);
    }

    /**
     * Get the value of Bookwishes
     *
     * @return mixed
     */
    public function getBookwishes()
    {
        return $this->bookwishes;
    }

    public function addBookwish(Book $book)
    {
        $book->addUserwish($this);
        $this->bookwishes[] = $book;
    }

    public function removeBookwish(Book $book)
    {
        $book->removeUserwish($this);
        $this->bookwishes->removeElement($book);
    }

    /**
     * Get the value of Myfriends
     *
     * @return mixed
     */
    public function getMyfriends()
    {
        return $this->myfriends;
    }

    public function addMyfriend(Friend $friend)
    {
        $friend->setUser($this);
        $this->myfriends[] = $user;
    }

    public function removeMyfriend(Friend $friend)
    {
        $this->myfriends->removeElement($friend);
    }

    /**
     * Get the value of Friendswithme
     *
     * @return mixed
     */
    public function getFriendswithme()
    {
        return $this->friendswithme;
    }

    public function addFriendwithme(Friend $friend)
    {
        $friend->setHasFriend($this);
        $this->friendswithme[] = $friend;
    }

    public function removeFriendwithle(Friend $friend)
    {
        $this->friendswithme->removeElement($friend);
    }

    public function __toString() {
        return $this->getUsername();
    }
}
