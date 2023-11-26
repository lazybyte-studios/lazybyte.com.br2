using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class Stats : MonoBehaviour
{
    public GameObject stats_btn;
    bool active = false;

    public Sprite newButtonImage;
    public Button button;

    public void Statsbar()
    {
        if (active == false)
        {
            stats_btn.transform.gameObject.SetActive(true);
            active = true;
        }
        else
        {
            stats_btn.transform.gameObject.SetActive(false);
            active = false;
        }

    }

    public void ChangeButtonImage()
    {
        button.image.sprite = newButtonImage;
    }
}