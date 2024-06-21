<?php

/**
 *
 */
class Nummer
{
    private int $ID;
    private string $albumID;
    private string $titel;
    private ?string $duur;
    private ?string $URL;

    /**
     * @param int $ID
     * @param string $albumID
     * @param string $titel
     * @param string|null $duur
     * @param string|null $URL
     */
    public function __construct(int $ID, string $albumID, string $titel, ?string $duur, ?string $URL)
    {
        $this->ID = $ID;
        $this->albumID = $albumID;
        $this->titel = $titel;
        $this->duur = $duur;
        $this->URL = $URL;
    }

    public static function getAll(PDO $db): array
    {
        // Voorbereiden van de query
        $stmt = $db->query("SELECT * FROM nummer");

        // Array om personen op te slaan
        $alleNummers = [];

        // Itereren over de resultaten en personen toevoegen aan de array
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $nummer = new Nummer(
                $row['ID'],
                $row['albumID'],
                $row['titel'],
                $row['duur'],
                $row['URL'],
            );
            $alleNummers[] = $nummer;
        }

        // Retourneer array met personen
        return $alleNummers;
    }

    /**
     * @return int
     */
    public function getID(): int
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     */
    public function setID(int $ID): void
    {
        $this->ID = $ID;
    }

    /**
     * @return string
     */
    public function getAlbumID(): string
    {
        return $this->albumID;
    }

    /**
     * @param string $albumID
     */
    public function setAlbumID(string $albumID): void
    {
        $this->albumID = $albumID;
    }

    /**
     * @return string
     */
    public function getTitel(): string
    {
        return $this->titel;
    }

    /**
     * @param string $titel
     */
    public function setTitel(string $titel): void
    {
        $this->titel = $titel;
    }

    /**
     * @return string|null
     */
    public function getDuur(): ?string
    {
        return $this->duur;
    }

    /**
     * @param string|null $duur
     */
    public function setDuur(?string $duur): void
    {
        $this->duur = $duur;
    }

    /**
     * @return string|null
     */
    public function getURL(): ?string
    {
        return $this->URL;
    }

    /**
     * @param string|null $URL
     */
    public function setURL(?string $URL): void
    {
        $this->URL = $URL;
    }



}