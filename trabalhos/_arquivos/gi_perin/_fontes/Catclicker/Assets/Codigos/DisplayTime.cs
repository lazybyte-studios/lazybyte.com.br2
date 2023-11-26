using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class DisplayTime : MonoBehaviour
{
    public GameObject theDisplay;
    public int hour;
    public int minutes;
    
    void Start()
    {
        hour = System.DateTime.Now.Hour;
        minutes = System.DateTime.Now.Minute;
        theDisplay.GetComponent<Text>().text = "" + hour + ":" + minutes;
    }

    // Update is called once per frame
    void Update()
    {
        
    }
}
