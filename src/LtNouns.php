<?php 
namespace LtWords\LtNouns;
 
/**
 * Class to generate noun declensions in Lithuanian language.
 */
class LtNouns
{
  private function generateDeclensionsForE($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "ė",
          "ko" => $root .  "ės",
          "ką" => $root . "ę",
          "kam" => $root . "ei",
          "kame" => $root . "ėje",
          "kuo" => $root . "e",
          "o" => $root . "e"
        ),
        "plural" => array(
          "kas" => $root . "ės",
          "ko" => $root . "ių",
          "ką" => $root . "es",
          "kam" => $root . "ėms",
          "kame" => $root . "ėse",
          "kuo" => $root . "ėmis",
          "o" => $root . "ės"
        )
      );
  }

  private function generateDeclensionsForA($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "a",
          "ko" => $root .  "os",
          "ką" => $root . "ą",
          "kam" => $root . "ai",
          "kame" => $root . "oje",
          "kuo" => $root . "a",
          "o" => $root . "a"
        ),
        "plural" => array(
          "kas" => $root . "os",
          "ko" => $root . "ų",
          "ką" => $root . "as",
          "kam" => $root . "oms",
          "kame" => $root . "ose",
          "kuo" => $root . "omis",
          "o" => $root . "os"
        )
      );
  }

  private function generateDeclensionsForAs($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "as",
          "ko" => $root .  "o",
          "ką" => $root . "ą",
          "kam" => $root . "ui",
          "kame" => $root . "e",
          "kuo" => $root . "u",
          "o" => $root . "e"
        ),
        "plural" => array(
          "kas" => $root . "ai",
          "ko" => $root . "ų",
          "ką" => $root . "us",
          "kam" => $root . "ams",
          "kame" => $root . "uose",
          "kuo" => $root . "ais",
          "o" => $root . "ai"
        )
      );
  }
 
  /**
   * Generate all declensions for a given noun.
   * The input must be in nominative singular.
   * The output will be an array containing all the declensions,
   * in singular and plural forms.
   */
  public function generateDeclensions($noun)
  {
      // Possible endings:
      // -ias, -as, -is, -ys, -ia, -a, -ė, -ius, -us, -uo

      if (preg_match('/(.*)as$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForAs($root);
      }

      if (preg_match('/(.*)a$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForA($root);
      }
      
      if (preg_match('/(.*)ė$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForE($root);
      }
      
      return "";
  }
}
