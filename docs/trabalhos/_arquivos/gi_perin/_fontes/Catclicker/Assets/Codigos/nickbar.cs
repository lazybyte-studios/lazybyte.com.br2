using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class nickbar : MonoBehaviour
{
    public GameObject nickbar_btn;
    bool active = false;

    public Sprite newButtonImage;
    public Button button;

    public void Nickbar()
    {
        if (active == false)
        {
            nickbar_btn.transform.gameObject.SetActive(true);
            active = true;
        }
        else
        {
            nickbar_btn.transform.gameObject.SetActive(false);
            active = false;
        }

    }

    public void ChangeButtonImage()
    {
        button.image.sprite = newButtonImage;
    }
}

