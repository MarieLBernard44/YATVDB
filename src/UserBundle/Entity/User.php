<?php


namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
    protected $id;

  /**
   * @ORM\Column(name="firstname", type="string")
   */
    private $firstname;

  /**
   * @ORM\Column(name="lastname", type="string")
   */
    private $lastname;

  /**
   * @ORM\Column(name="birthdate", type="date")
   */
    private $birthdate;

    /**
     * @ORM\OneToOne(targetEntity="\SerieBundle\Entity\Image", cascade={"persist"})
     */
    private $profilePicture;

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set birthdate
     *
     * @param integer $birthdate
     * @return User
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return integer 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set profilePicture
     *
     * @param \SerieBundle\Entity\Image $profilePicture
     * @return User
     */
    public function setProfilePicture(\SerieBundle\Entity\Image $profilePicture = null)
    {
        $this->profilePicture = $profilePicture;

        return $this;
    }

    /**
     * Get profilePicture
     *
     * @return \SerieBundle\Entity\Image 
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }
}
