using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class shop : MonoBehaviour
{
    public GameObject trash_btn;
    bool active = false;

    public Sprite newButtonImage;
    public Button button;

    public void Shop()
    {
        if (active == false)
        {
            trash_btn.transform.gameObject.SetActive(true);
            active = true;
        }
        else
        {
            trash_btn.transform.gameObject.SetActive(false);
            active = false;
        }

    }

    public void ChangeButtonImage()
    {
        button.image.sprite = newButtonImage;
    }
}
