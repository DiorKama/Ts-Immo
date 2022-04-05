<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="proprietaires")
 */

class Proprietaire
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     * 
     */
    private $nom;
    /**
     * @ORM\Column(type="string")
     * 
     */
    private $prenom;
    /**
     * @ORM\Column(type="string")
     * 
     */
    private $sexe;
    /**
     * @ORM\Column(type="string")
     * 
     */
    private $date_naissance;
    /**
     * @ORM\Column(type="string")
     * 
     */
    private $addresse;
    /**
     * @ORM\Column(type="integer")
     * 
     */
    private $telephone;
    /**
     * @ORM\Column(type="string")
     * 
     */
    private $piece_identite;
    /**
     * @ORM\Column(type="string")
     * 
     */
    private $date_ajout;
     

    public function __construct()
    {
        
    }

    public function getId()
    {
    return $this->id;
    }
    public function setId($id)
    {
      $this->id = $id; 
    }

    public function getNom()
    {
    return $this->nom;
    }
    public function setNom($nom)
    {
      $this->nom = $nom; 
    }

    public function getPrenom()
    {
    return $this->prenom;
    }
    public function setPrenom($prenom)
    {
      $this->prenom = $prenom; 
    }

    public function getSexe()
    {
    return $this->sexe;
    }
    public function setSexe($sexe)
    {
      $this->sexe = $sexe; 
    }

    public function getDate_naissance()
    {
    return $this->date_naissance;
    }
    public function setDate_naissance($date_naissance)
    {
      $this->date_naissance = $date_naissance; 
    }

    public function getAddresse()
    {
    return $this->addresse;
    }
    public function setAddresse($addresse)
    {
      $this->addresse = $addresse; 
    }

    public function getTelephone()
    {
    return $this->telephone;
    }
    public function setTelephone($telephone)
    {
      $this->telephone = $telephone; 
    }

    public function getPiece_identite()
    {
    return $this->piece_identite;
    }
    public function setPiece_identite($piece_identite)
    {
      $this->piece_identite = $piece_identite; 
    }

    public function getDate_ajout()
    {
    return $this->date_ajout;
    }
    public function setDate_ajout($date_ajout)
    {
      $this->date_ajout = $date_ajout; 
    }
  

}
?>