using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class upgrades : MonoBehaviour
{
    public GameObject upgrade_btn;
    bool active = false;

    public Sprite newButtonImage;
    public Button button;

    public void upgrade()
    {
        if (active == false)
        {
            upgrade_btn.transform.gameObject.SetActive(true);
            active = true;
        }
        else
        {
            upgrade_btn.transform.gameObject.SetActive(false);
            active = false;
        }

    }

    public void ChangeButtonImage()
    {
        button.image.sprite = newButtonImage;
    }
}