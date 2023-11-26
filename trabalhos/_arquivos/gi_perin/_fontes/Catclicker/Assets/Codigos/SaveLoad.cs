using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class SaveLoad : MonoBehaviour
{
    // Start is called before the first frame update
    void Start()
    {
        GetComponent<GameManager>().score = PlayerPrefs.GetFloat("score", 0);

        GetComponent<GameManager>().playerLvl = PlayerPrefs.GetInt("playerLvl", 1);
        GetComponent<GameManager>().playerXp = PlayerPrefs.GetFloat("playerXp", 0);
        GetComponent<GameManager>().playerNeededXp = PlayerPrefs.GetFloat("playerNeededXp", 100);

        GetComponent<GameManager>().upgrade1Cost = PlayerPrefs.GetInt("upgrade1Cost", 25);
        GetComponent<GameManager>().upgrade1Lvl = PlayerPrefs.GetInt("upgrade1Lvl", 0);
        GetComponent<GameManager>().upgrade1Amount = PlayerPrefs.GetInt("upgrade1Amount", 1);

        GetComponent<GameManager>().upgrade2Cost = PlayerPrefs.GetInt("upgrade2Cost", 100);
        GetComponent<GameManager>().upgrade2Lvl = PlayerPrefs.GetInt("upgrade2Lvl", 0);
        GetComponent<GameManager>().upgrade2Amount = PlayerPrefs.GetInt("upgrade2Amount", 10);

        GetComponent<GameManager>().upgrade3Cost = PlayerPrefs.GetInt("upgrade3Cost", 250);
        GetComponent<GameManager>().upgrade3Lvl = PlayerPrefs.GetInt("upgrade3Lvl", 0);
        GetComponent<GameManager>().upgrade3Amount = PlayerPrefs.GetInt("upgrade3Amount", 25);

        GetComponent<GameManager>().idle1UpgradeCost = PlayerPrefs.GetInt("idle1UpgradeCost", 100);
        GetComponent<GameManager>().idleUpgrade1Lvl = PlayerPrefs.GetInt("idleUpgrade1Lvl", 0);
        GetComponent<GameManager>().idle1UpgradeAmount = PlayerPrefs.GetFloat("idle1UpgradeLvl", 0f);

        GetComponent<GameManager>().clickAmount = PlayerPrefs.GetInt("clickAmount", 1);



    }

    public void SaveProfile()
    {
        PlayerPrefs.SetFloat("score", GetComponent<GameManager>().score);
        PlayerPrefs.SetInt("playerLvl", GetComponent<GameManager>().playerLvl);
        PlayerPrefs.SetFloat("playerXp", GetComponent<GameManager>().playerXp);
        PlayerPrefs.SetFloat("playerNeededXp", GetComponent<GameManager>().playerNeededXp);

        PlayerPrefs.SetFloat("upgrade1Cost", GetComponent<GameManager>().upgrade1Cost);
        PlayerPrefs.SetInt("upgrade1Lvl", GetComponent<GameManager>().upgrade1Lvl);
        PlayerPrefs.SetInt("upgrade1Amount", GetComponent<GameManager>().upgrade1Amount);

        PlayerPrefs.SetFloat("upgrade2Cost", GetComponent<GameManager>().upgrade2Cost);
        PlayerPrefs.SetInt("upgrade2Lvl", GetComponent<GameManager>().upgrade2Lvl);
        PlayerPrefs.SetInt("upgrade2Amount", GetComponent<GameManager>().upgrade2Amount);

        PlayerPrefs.SetFloat("upgrade3Cost", GetComponent<GameManager>().upgrade3Cost);
        PlayerPrefs.SetInt("upgrade3Lvl", GetComponent<GameManager>().upgrade3Lvl);
        PlayerPrefs.SetInt("upgrade3Amount", GetComponent<GameManager>().upgrade3Amount);

        PlayerPrefs.SetFloat("idle1UpgradeCost", GetComponent<GameManager>().idle1UpgradeCost);
        PlayerPrefs.SetInt("idleUpgrade1Lvl", GetComponent<GameManager>().idleUpgrade1Lvl);
        PlayerPrefs.SetFloat("idle1UpgradeAmount", GetComponent<GameManager>().idle1UpgradeAmount);

        PlayerPrefs.SetFloat("clickAmount", GetComponent<GameManager>().clickAmount);

    }
}
