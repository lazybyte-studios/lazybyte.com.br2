using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class BG_janela : MonoBehaviour
{
    public GameObject disc_btn;
    bool active = false;

    public Sprite newButtonImage;
    public Button button;

    public void Bgjanela()
    {
        if (active == false)
        {
            disc_btn.transform.gameObject.SetActive(true);
            active = true;
        }
        else
        {
            disc_btn.transform.gameObject.SetActive(false);
            active = false;
        }

    }

    public void ChangeButtonImage()
    {
        button.image.sprite = newButtonImage;
    }
}
