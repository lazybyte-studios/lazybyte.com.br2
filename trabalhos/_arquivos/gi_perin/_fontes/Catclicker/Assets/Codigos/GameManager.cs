using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI; 

public class GameManager : MonoBehaviour
{
    public GameObject clickupgrade1Btn;
    public GameObject clickupgrade2Btn;
    public GameObject clickupgrade3Btn;

    public float score;
    public Text scoreText;

    public float upgrade1Cost = 25;
    public Text upgrade1CostText;
    public int upgrade1Lvl = 0;
    public Text upgrade1LvlText;

    public float upgrade2Cost = 100;
    public Text upgrade2CostText;
    public int upgrade2Lvl = 0;
    public Text upgrade2LvlText;

    public float upgrade3Cost = 250;
    public Text upgrade3CostText;
    public int upgrade3Lvl = 0;
    public Text upgrade3LvlText;

    public float clickAmount = 1;
    public Text clickAmountText;

    public int upgrade1Amount = 1;
    public int upgrade2Amount = 10;
    public int upgrade3Amount = 25;

    public Text upgrade1AmountText;
    public Text upgrade2AmountText;
    public Text upgrade3AmountText;

    public float idle1UpgradeAmount = 0.0f;
    public float idle1UpgradeCost = 100;
    public Text idle1UpgradeAmountText;
    public Text idle1UpgradeCostText;
    public int idleUpgrade1Lvl = 0;

    public int playerLvl = 1;
    public float playerXp = 0;
    public float playerNeededXp = 100;

    public Slider xpSlider;
    public Text playerLvlText;

    public GameObject idle1UpgradeBtn;

    public AudioSource mainButtonSound;
    public AudioSource upgrade1BtnSound;
    public AudioSource upgrade2BtnSound;
    public AudioSource upgrade3BtnSound;
    public AudioSource idleUpgrade1BtnSound;
    public AudioSource lvlUpSound;


    void Start()
    {
        clickupgrade2Btn.SetActive(false);
        clickupgrade3Btn.SetActive(false);
        idle1UpgradeBtn.SetActive(false);

    }

    void FixedUpdate()
        
    {
        
        if(score < 1000)
        {
            scoreText.text = "Success: " + score.ToString("0.0");
        }
        if (score >= 1000 && score < 1000000)
        {
            scoreText.text = "Success: " + (score / 1000).ToString("0.0") + "k";
        }
        if (score >= 1000000 && score < 1000000000)
        {
            scoreText.text = "Success: " + (score / 1000000).ToString("0.0") + "m";
        }
        if (score >= 1000000000 && score < 1000000000000)
        {
            scoreText.text = "Success: " + (score / 1000000000).ToString("0.0") + "b";
        }
        if (score >= 1000000000000 && score < 1000000000000000)
        {
            scoreText.text = "Success: " + (score / 1000000000000).ToString("0.0") + "t";
        }
        if (score >= 1000000000000000 && score < 1000000000000000000)
        {
            scoreText.text = "Success: " + (score / 1000000000000000).ToString("0.0") + "q";
        }
        if (score > 1000000000000000000)
        {
            scoreText.text = "Success: " + score.ToString("0.00E0");
        }


        if (clickAmount < 1000) { 
            clickAmountText.text = clickAmount.ToString("0") + " /click";
            }
        if(clickAmount >= 1000 && clickAmount < 1000000)
        {
            clickAmountText.text = (clickAmount / 1000).ToString("0.00") + "k" + " /click";
        }
        if (clickAmount >= 1000000 && clickAmount < 1000000000)
        {
            clickAmountText.text = (clickAmount / 1000000).ToString("0.00") + "m" + " /click";
        }
        if (clickAmount >= 1000000000 && clickAmount < 1000000000000)
        {
            clickAmountText.text = (clickAmount / 1000000000).ToString("0.00") + "b" + " /click";
        }
        if (clickAmount >= 1000000000000 && clickAmount < 1000000000000000)
        {
            clickAmountText.text = (clickAmount / 1000000000000).ToString("0.00") + "t" + " /click";
        }
        if (clickAmount >= 1000000000000000 && clickAmount < 1000000000000000000)
        {
            clickAmountText.text = (clickAmount / 1000000000000000).ToString("0.00") + "q" + " /click";
        }
        if (clickAmount > 1000000000000000)
        {
            clickAmountText.text = clickAmount.ToString("0.00E0") + " /click";
        }


        if (upgrade1Cost < 1000)
        {
            upgrade1CostText.text = "$ " + upgrade1Cost;
        }
        if (upgrade1Cost >= 1000 && upgrade1Cost < 1000000)
        {
            upgrade1CostText.text = "$ " + (upgrade1Cost / 1000).ToString("0.00") + "k";
        }
        if (upgrade1Cost >= 1000000 && upgrade1Cost < 1000000000)
        {
            upgrade1CostText.text = "$ " + (upgrade1Cost / 1000000).ToString("0.00") + "m";
        }
        if (upgrade1Cost >= 1000000000 && upgrade1Cost < 1000000000000)
        {
            upgrade1CostText.text = "$ " + (upgrade1Cost / 1000000000).ToString("0.00") + "b";
        }
        if (upgrade1Cost >= 1000000000000 && upgrade1Cost < 1000000000000000)
        {
            upgrade1CostText.text = "$ " + (upgrade1Cost / 1000000000000).ToString("0.00") + "t";
        }
        if (upgrade1Cost >= 1000000000000000 && upgrade1Cost < 1000000000000000000)
        {
            upgrade1CostText.text = "$ " + (upgrade1Cost / 1000000000000000).ToString("0.00") + "q";
        }
        if (upgrade1Cost > 1000000000000000)
        {
            upgrade1CostText.text = "$ " + upgrade1Cost.ToString("0.00E0");
        }

        if (upgrade2Cost < 1000)
        {
            upgrade2CostText.text = "$ " + upgrade2Cost;
        }
        if (upgrade2Cost >= 1000 && upgrade2Cost < 1000000)
        {
            upgrade2CostText.text = "$ " + (upgrade2Cost / 1000).ToString("0.00") + "k";
        }
        if (upgrade2Cost >= 1000000 && upgrade2Cost < 1000000000)
        {
            upgrade2CostText.text = "$ " + (upgrade2Cost / 1000000).ToString("0.00") + "m";
        }
        if (upgrade2Cost >= 1000000000 && upgrade2Cost < 1000000000000)
        {
            upgrade2CostText.text = "$ " + (upgrade2Cost / 1000000000).ToString("0.00") + "b";
        }
        if (upgrade2Cost >= 1000000000000 && upgrade2Cost < 1000000000000000)
        {
            upgrade2CostText.text = "$ " + (upgrade2Cost / 1000000000000).ToString("0.00") + "t";
        }
        if (upgrade2Cost >= 1000000000000000 && upgrade2Cost < 1000000000000000000)
        {
            upgrade2CostText.text = "$ " + (upgrade2Cost / 1000000000000000).ToString("0.00") + "q";
        }
        if (upgrade2Cost > 1000000000000000)
        {
            upgrade2CostText.text = "$ " + upgrade2Cost.ToString("0.00E0");
        }

        if (upgrade3Cost < 1000)
        {
            upgrade3CostText.text = "$ " + upgrade3Cost;
        }
        if (upgrade3Cost >= 1000 && upgrade3Cost < 1000000)
        {
            upgrade3CostText.text = "$ " + (upgrade3Cost / 1000).ToString("0.00") + "k";
        }
        if (upgrade3Cost >= 1000000 && upgrade3Cost < 1000000000)
        {
            upgrade3CostText.text = "$ " + (upgrade3Cost / 1000000).ToString("0.00") + "m";
        }
        if (upgrade3Cost >= 1000000000 && upgrade3Cost < 1000000000000)
        {
            upgrade3CostText.text = "$ " + (upgrade3Cost / 1000000000).ToString("0.00") + "b";
        }
        if (upgrade3Cost >= 1000000000000 && upgrade3Cost < 1000000000000000)
        {
            upgrade3CostText.text = "$ " + (upgrade3Cost / 1000000000000).ToString("0.00") + "t";
        }
        if (upgrade3Cost >= 1000000000000000 && upgrade3Cost < 1000000000000000000)
        {
            upgrade3CostText.text = "$ " + (upgrade3Cost / 1000000000000000).ToString("0.00") + "q";
        }
        if (upgrade3Cost > 1000000000000000000)
        {
            upgrade3CostText.text = "$ " + upgrade3Cost.ToString("0.00E0");
        }



        upgrade1AmountText.text = "+" + upgrade1Amount + " /click";
        upgrade2AmountText.text = "+" + upgrade2Amount + " /click";
        upgrade3AmountText.text = "+" + upgrade3Amount + " /click";

        if(idle1UpgradeAmount < 1000)
        {
            idle1UpgradeAmountText.text = "+" + idle1UpgradeAmount.ToString("0.0")+" /s";
        }
        if(idle1UpgradeAmount >= 1000 && idle1UpgradeAmount < 1000000)
        {
            idle1UpgradeAmountText.text = "+" + (idle1UpgradeAmount / 1000).ToString("0.00") + "k" + " /s";
        }
        if (idle1UpgradeAmount >= 1000000 && idle1UpgradeAmount < 1000000000)
        {
            idle1UpgradeAmountText.text = "+" + (idle1UpgradeAmount / 1000000).ToString("0.00") + "m" + " /s";
        }
        if (idle1UpgradeAmount >= 1000000000 && idle1UpgradeAmount < 1000000000000)
        {
            idle1UpgradeAmountText.text = "+" + (idle1UpgradeAmount / 1000000000).ToString("0.00") + "b" + " /s";
        }
        if (idle1UpgradeAmount >= 1000000000000 && idle1UpgradeAmount < 1000000000000000)
        {
            idle1UpgradeAmountText.text = "+" + (idle1UpgradeAmount / 1000000000000).ToString("0.00") + "t" + " /s";
        }
        if (idle1UpgradeAmount >= 1000000000000000 && idle1UpgradeAmount < 1000000000000000000)
        {
            idle1UpgradeAmountText.text = "+" + (idle1UpgradeAmount / 1000000000000000).ToString("0.00") + "q" + " /s";
        }
        if (idle1UpgradeAmount > 1000000000000000)
        {
            idle1UpgradeAmountText.text = "+" + idle1UpgradeAmount.ToString("0.00E0") + " /s";
        }

        
        if (idle1UpgradeCost < 1000)
        {
            idle1UpgradeCostText.text = "$ " + idle1UpgradeCost.ToString("0");
        }
        if (idle1UpgradeCost >= 1000 && idle1UpgradeCost < 1000000)
        {
            idle1UpgradeCostText.text = "$ " + (idle1UpgradeCost / 1000).ToString("0.00") + "k" ;
        }
        if (idle1UpgradeCost >= 1000000 && idle1UpgradeCost < 1000000000)
        {
            idle1UpgradeCostText.text = "$ " + (idle1UpgradeCost / 1000000).ToString("0.00") + "m";
        }
        if (idle1UpgradeCost >= 1000000000 && idle1UpgradeCost < 1000000000000)
        {
            idle1UpgradeCostText.text = "$ " + (idle1UpgradeCost / 1000000000).ToString("0.00") + "b";
        }
        if (idle1UpgradeCost >= 1000000000000 && idle1UpgradeCost < 1000000000000000)
        {
            idle1UpgradeCostText.text = "$ " + (idle1UpgradeCost / 1000000000000).ToString("0.00") + "t";
        }
        if (idle1UpgradeCost >= 1000000000000000 && idle1UpgradeCost < 1000000000000000000)
        {
            idle1UpgradeCostText.text = "$ " + (idle1UpgradeCost / 1000000000000000).ToString("0.00") + "q";
        }
        if (idle1UpgradeCost > 1000000000000000)
        {
            idle1UpgradeCostText.text = "$ " + idle1UpgradeCost.ToString("0.00E0");
        }


        score += idle1UpgradeAmount / 60;

        xpSlider.value = playerXp;
        xpSlider.maxValue = playerNeededXp;

        playerLvlText.text = "Oscars: " + playerLvl;
        upgrade1LvlText.text = "Lvl: " + upgrade1Lvl;
        upgrade2LvlText.text = "Lvl: " + upgrade2Lvl;
        upgrade3LvlText.text = "Lvl: " + upgrade3Lvl;


        if (upgrade1Lvl >= 10)
        {
            clickupgrade2Btn.SetActive(true);
        }
        if (upgrade2Lvl >= 10)
        {
            clickupgrade3Btn.SetActive(true);
        }

        if(playerXp >= playerNeededXp)
        {
            playerXp = 0;
            playerLvl++;
            playerNeededXp += playerNeededXp * .10f;
            lvlUpSound.Play();
        }

        if(playerLvl >= 5)
        {
            idle1UpgradeBtn.SetActive(true);
        }
    }
    public void MainButtonPress()
    {
        score+= clickAmount;
        playerXp++;
        mainButtonSound.Play();
        GetComponent<SaveLoad>().SaveProfile();
    }
    public void Upgrade1Buy()
    {
        if(score >= upgrade1Cost)
        {
        score -= upgrade1Cost;
        clickAmount += upgrade1Amount;
        upgrade1Cost += 25;
        upgrade1Lvl++;
        upgrade1BtnSound.Play();
        GetComponent<SaveLoad>().SaveProfile();
        }
     }

    public void Upgrade2Buy()
    {
        if (score >= upgrade2Cost)
        {
            score -= upgrade2Cost;
            clickAmount += upgrade2Amount;
            upgrade2Cost += 50;
            upgrade2Lvl++;
            upgrade2BtnSound.Play();
            GetComponent<SaveLoad>().SaveProfile();
        }
    }

    public void Upgrade3Buy()
    {
        if (score >= idle1UpgradeCost)
        {
            score -= idle1UpgradeCost;
            clickAmount += upgrade3Amount;
            idle1UpgradeCost += 100;
            upgrade3Lvl++;
            upgrade3BtnSound.Play();
            GetComponent<SaveLoad>().SaveProfile();
        }
    }
    public void Idle1UpgradeBuy()
    {
        if(score >= idle1UpgradeCost)
        {
            score -= idle1UpgradeCost;
            idle1UpgradeAmount += 0.1f;
            idle1UpgradeCost += 50;
            idleUpgrade1Lvl++;
            idleUpgrade1BtnSound.Play();
            GetComponent<SaveLoad>().SaveProfile();
        }
    }
}
