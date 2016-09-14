package com.example.radiobutton;

import android.content.Context;
import android.widget.CheckBox;
import android.widget.CompoundButton.OnCheckedChangeListener;
import android.widget.Toast;
import android.widget.CompoundButton;

public class MyCheck{
	
	public Context context1;
	public CheckBox check1;
	
	public MyCheck(Context context, CheckBox check){
		
		this.context1 = context;
		this.check1 = check;
		
		check.setOnCheckedChangeListener(new OnCheckedChangeListener() {
			
			@Override
			public void onCheckedChanged(CompoundButton buttonView, boolean isChecked) {
				// TODO Auto-generated method stub
				if (check1.isChecked()){
					Toast.makeText(context1, "复选按钮选择了"+check1.getText(), Toast.LENGTH_SHORT).show();
				}
			}
		});
	}
	
}