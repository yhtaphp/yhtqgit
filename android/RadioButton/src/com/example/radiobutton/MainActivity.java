package com.example.radiobutton;

import android.app.Activity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Toast;

import android.widget.RadioGroup.OnCheckedChangeListener;
import android.view.View.OnClickListener;

public class MainActivity extends Activity {

	RadioGroup raGroup;
	Button btn1;
	CheckBox check;
	
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		
		
		
		raGroup = (RadioGroup)findViewById(R.id.raGroup);
		btn1 = (Button)findViewById(R.id.btn1);
		check = (CheckBox)findViewById(R.id.check1);
		
		MyCheck my = new MyCheck(getApplicationContext(), check); 
		
		// ���һ����ѡ������ݸı��ˣ� �ʹ����������
		raGroup.setOnCheckedChangeListener(new OnCheckedChangeListener() {
			
			@Override
			public void onCheckedChanged(RadioGroup group, int checkedId) {
				// TODO Auto-generated method stub
				RadioButton rBtn = (RadioButton)findViewById(checkedId);
				Toast.makeText(getApplicationContext(),"��ѡ���ˣ�"+rBtn.getText(),Toast.LENGTH_SHORT).show();
				
			}
		});
		
		
		btn1.setOnClickListener(new OnClickListener() {
			
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub				
				RadioButton rBtn;
				for ( int i = 0; i < raGroup.getChildCount(); i++){
					rBtn = (RadioButton)raGroup.getChildAt(i);
					if (rBtn.isChecked()){
						Toast.makeText(getApplicationContext(), "��ť���,ѡ����ǣ�"+rBtn.getText(),Toast.LENGTH_SHORT).show();
					}
				}
				
			}
		});
	}
}